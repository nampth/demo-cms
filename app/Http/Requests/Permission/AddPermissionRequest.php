<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/22/2018
 * Time: 3:13 PM
 */

namespace App\Http\Requests\Permission;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddPermissionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:permissions|min:4|max:100',
            'description' => 'max:256',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên nhóm người dùng',
            'description' => 'Mô tả',
        ];
    }
}