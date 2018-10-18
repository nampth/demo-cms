<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/18/2018
 * Time: 10:00 AM
 */

namespace App\Traits;

trait RoleUserTrait
{
    public function users()
    {
        return $this->belongsToMany('App\User','user_role','user_id','role_id');
    }
}