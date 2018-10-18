<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/18/2018
 * Time: 10:47 AM
 */

namespace App\Models;

use App\Traits\PermissionRoleTrait;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use PermissionRoleTrait;
    protected $table = 'permissions';
    public $timestamps = false;
}