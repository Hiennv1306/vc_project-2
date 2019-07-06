<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\model_Users;
use Validator;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function danhsach() {
    	$user_list = model_Users::orderBy('id','desc')->paginate(5);
    	return view('admin.user.danhsach')->with('user_list', $user_list);
    }

    public function add() {
        
    	return view('admin.user.add');
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
    	return view('admin.user.edit', compact('all'));
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
        $user = model_Users::where('email', $req->id)->get();
        if(count($user) == 0)
            return 'email khong ton tai';
        else 
            return 'email da ton tai';

    }

}
