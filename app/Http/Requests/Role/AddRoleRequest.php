<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/22/2018
 * Time: 3:13 PM
 */

namespace App\Http\Requests\Role;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddRoleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:roles|min:4|max:100',
            'description' => 'max:256',
            'default_redirect' => 'required|max:256',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên nhóm người dùng',
            'description' => 'Mô tả',
            'default_redirect'=>'Trang mặc định'
        ];
    }
}