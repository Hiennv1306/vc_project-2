<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $req)
    {
        return [
            'name' => 'required|min:3|max:15',
            'email' => 'required|email|unique:users,email,' . $req->id,
            'phone' => 'required|regex:/[0-9]+/'
        ];
    }
    public function messages(){
        return [
            'name.required'     => 'Bạn chưa nhập tên',
            'email.required'    => 'Bạn chưa nhập emai',
            'email.email'       => 'Vui lòng nhập đúng định dạng email',
            'email.unique'      => 'Email đã tồn tại',
            'phone.required'    => 'Bạn chưa nhập số',
            'phone.regex'       =>  'Vui lòng nhập đúng định dạng số'
        ];
    }
}
