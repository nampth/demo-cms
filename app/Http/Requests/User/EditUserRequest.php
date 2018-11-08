<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 11/5/2018
 * Time: 1:55 PM
 */

namespace App\Http\Requests\User;


use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|numeric',
            'password' => 'nullable|min:8|max:100',
            're_password' => 'nullable|min:8|max:100|same:password',
            'fullname' => 'nullable|min:6|max:100',
            'email' => 'nullable|min:6|max:100|email:true',
            'role' => 'required|numeric'
        ];
    }

    public function attributes()
    {
        return [
            'id' => 'ID',
            'password' => 'Mật khẩu',
            're_password' => 'Nhập lại mật khẩu',
            'fullname' => 'Tên đầy đủ',
            'email' => 'Email',
            'role' => 'Nhóm người dùng'
        ];
    }
}