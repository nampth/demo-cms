<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/18/2018
 * Time: 9:58 AM
 */

namespace App\Models\Backend;

use DateTimeInterface;
use App\Traits\RolePermissionTrait;
use App\Traits\RoleUserTrait;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use RoleUserTrait, RolePermissionTrait;
    protected $table = 'roles';
    public $timestamps = false;
}