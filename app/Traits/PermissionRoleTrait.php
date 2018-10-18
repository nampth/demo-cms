<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/18/2018
 * Time: 10:51 AM
 */

namespace App\Traits;

trait PermissionRoleTrait
{
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'permission_role', 'role_id', 'permission_id');
    }
}