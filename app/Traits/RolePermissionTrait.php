<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/18/2018
 * Time: 10:47 AM
 */

namespace App\Traits;

trait RolePermissionTrait
{
    public function permissions()
    {
        return $this->belongsTomany('App\Models\Backend\Permission', 'permission_role', 'role_id', 'permission_id');
    }
}