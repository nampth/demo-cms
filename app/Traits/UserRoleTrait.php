<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/18/2018
 * Time: 9:52 AM
 */

namespace App\Traits;

trait UserRoleTrait
{
    public function role()
    {
        return $this->belongsToMany('App\Models\Backend\Role', 'user_role', 'user_id', 'role_id');
    }
}