<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/26/2018
 * Time: 2:45 PM
 */

namespace App\Repositories\Backend;


use App\Models\Role;
use App\Repositories\BaseRepository;

class RoleRepository extends BaseRepository
{
    public function model()
    {
        // TODO: Implement model() method.
        return Role::class;
    }

    public function listingAll(){
        return $this->model->all();
    }
}