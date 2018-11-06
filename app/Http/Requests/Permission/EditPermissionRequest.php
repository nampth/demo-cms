<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 11/6/2018
 * Time: 1:50 PM
 */

namespace App\Http\Requests\Permission;


use Illuminate\Foundation\Http\FormRequest;

class EditPermissionRequest extends FormRequest
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