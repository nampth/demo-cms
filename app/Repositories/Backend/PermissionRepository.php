<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 11/6/2018
 * Time: 10:21 AM
 */

namespace App\Repositories\Backend;


use App\Models\Permission;
use App\Repositories\BaseRepository;

class PermissionRepository extends BaseRepository
{
    public function model()
    {
        // TODO: Implement model() method.
        return Permission::class;
    }

    public function listingAll(){
        return $this->model->all();
    }
}