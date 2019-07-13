<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\Search;
use App\model_Users;
use App\Province;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Imports\UsersImport;
use Excel;
use View;

class TestController extends Controller
{
    public function index() {
        return view('admin.index.index');
    }

    public function danhsach(Request $req) {
    	$query = model_Users::where('id', '>', '0');

        if ($req->has('name')) {
            $query->where('name','LIKE','%'.$req->name.'%');
        }

        if ($req->has('diachi')) {
            $query->where('province_id', $req->diachi);
        }
        $user_list = $query->orderBy('id', 'desc')->paginate(4);


        foreach ($user_list as $item) {
            $item->editUrl = url('admin/user/edit/' . $item->id);
            $item->deleteUrl = route('delete', ['id' => $item->id]);
        }

        // $user_list->withPath('admin/user/list');
        // $user_list->appends($req->all());
         
        // $paginate_link = $user_list->links();
        // dd($paginate_link)


        if ($req->ajax()) {

            return \Response::json(\View::make('admin.user.listTemplade', array('user_list' => $user_list))->render());
        }
        $province = Province::get();

    	return view('admin.user.danhsach', compact('user_list','province'));
    }

    public function add() {
        $province = Province::get();
       
    	return view('admin.user.add', compact('province'));
    }
    
    public function actionAdd(UserRequest $req) {
            
            $all = $req->all();
            $linhvuc = implode(',',$req->linhvuc);
            $all['linhvuc'] = $linhvuc;
            $pass = bcrypt($req->password);
            $all['password'] = $pass;
	    	$model = new model_Users();
	    	$model->create($all);

	    	return redirect('admin/user/list');
    }

    public function edit($id) {
    	$all =  model_Users::find($id);
        $province = Province::select()->get();
       
    	return view('admin.user.edit', compact('all','province'));
    }

    public function actionEdit(UserRequest $req) {
    	$item = model_Users::find($req->id);
    	$item->name = $req->name;
    	$item->phone = $req->phone;
    	$item->email = $req->email;
    	$item->address = $req->address;
        $item->gender = $req->gender;
        $item->province = $req->province;
        $linhvuc = implode(',',$req->linhvuc);
        $item->linhvuc = $linhvuc;
    	$item->save();
        // $item->fill($req->all())->save();

    	return redirect('admin/user/list');
    }

    public function destroy($id) {
    	model_Users::destroy($id);
    	return redirect('admin/user/list');
    }

    public function ajax(Request $req) {
        if(!empty($req->id)){
            $user = model_Users::where('email', $req->id)->get();
            if(count($user) == 0) {
                $msg = [
                    'status' => 'true',
                    'message' => '<p class="success"><i class="fas fa-check"></i> Bạn có thể sử dụng email này.</p>',
                    'data' => [
                        'status1' => 'Bạn có thể sử dụng email này.',
                        'status2' => 'Email this valid.'
                    ]
                ];
                return json_encode($msg);
            }
            else {
                $msg = [
                    'status' => 'false',
                    'message' => '<p class="error"><i class="fas fa-exclamation-triangle"></i> Email đã được sử dụng. Hãy thử tên khác.</p>',
                    'data' => [
                        'status1' => 'Email đã được sử dụng. Hãy thử tên khác.',
                        'status2' => 'Email this invalid.'
                    ]
                ];
                return json_encode($msg);
            }
        }  

    }

    public function import() {

        Excel::import(new UsersImport, '../app/Http/Controllers/docs/diachinh.xls');

        return 'All good!';
    }

    /*public function search(Request $req){
        if ($req->has('name')){ 
            // $pacientes = model_Users::where('name','LIKE','%'.$req->name.'%')->orwhere('province', $req->diachi)->paginate(2);
            // $filtro= ['name'=>$req->name];

            $pacientes = model_Users::where('name','LIKE','%'.$req->name.'%')->orwhere('province', $req->diachi)->paginate();
            foreach ($pacientes as $item) {
                $item->editUrl = url('admin/user/edit/' . $item->id);
                $item->deleteUrl = route('delete', ['id' => $item->id]);
            }

            if ($req->ajax()) {
                return \Response::json(\View::make('admin.user.listTemplade', array('user_list' => $pacientes))->render());
            }
            
        }
        
        return view('admin.user.search',compact('pacientes','filtro'));

    }
*/
}
