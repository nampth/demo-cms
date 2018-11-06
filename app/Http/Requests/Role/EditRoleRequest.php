<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 11/6/2018
 * Time: 1:50 PM
 */

namespace App\Http\Requests\Role;


use Illuminate\Foundation\Http\FormRequest;

class EditRoleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4|max:100',
            'description' => 'max:256',
            'default_redirect' => 'required|max:256',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên nhóm người dùng',
            'description' => 'Mô tả',
            'default_redirect' => 'Trang mặc định'
        ];
    }
}