<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class Search extends FormRequest
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
            'diachi' => 'required|not_in:0',
           
        ];
    }
    public function messages(){
        return [
            'name.required'     => 'Bạn chưa nhập tên',
            'diachi.required'    => 'Bạn chưa nhập địa chỉ',
            
        ];
    }
}
