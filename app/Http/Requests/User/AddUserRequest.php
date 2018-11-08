<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/22/2018
 * Time: 3:13 PM
 */

namespace App\Http\Requests\User;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:users|min:6|max:32',
            'password' => 'required|min:8|max:100',
            're_password' => 'required|min:8|max:100|same:password',
            'fullname' => 'nullable|min:6|max:100',
            'email' => 'nullable|min:6|max:100|email:true',
            'role' => 'required|numeric'
        ];
    }

    public function attributes()
    {
        return [
            'username' => 'Tên đăng nhập',
            'password' => 'Mật khẩu',
            're_password' => 'Nhập lại mật khẩu',
            'fullname' => 'Tên đầy đủ',
            'email' => 'Email',
            'role' => 'Nhóm người dùng'
        ];
    }
}