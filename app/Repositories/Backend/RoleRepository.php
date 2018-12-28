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

    public function listing($keyword = "", $start = 0, $length = 10, $orderBy = '', $orderType = 'asc', $countAll = true)
    {
        $query = $this->model->with('permissions');
        if ($keyword) {
            $query = $query->where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%");
        }

        if ($orderBy) {
            $query = $query->orderBy($orderBy, $orderType);
        }

        if ($countAll) {
            return $query->count();
        }else {
            $query = $query->limit($length)->offset($start);
        }

        return $query->get();
    }

    public function listingAll()
    {
        return $this->model->all();
    }

    public function add($name, $description, $redirect, $permission)
    {
        $role = new Role();
        $role->name = $name;
        $role->description = $description;
        $role->default_redirect = $redirect;
        if (!$role->save()) {
            return false;
        }
        $role->permissions()->attach($permission);
        return true;
    }

    public function deleteRole($id)
    {
        $role = Role::find($id);
        if (!$role || $role->name == 'admin') {
            return false;
        }
        $role->permissions()->detach();
        return $role->delete();
    }


    public function update($id, $name, $description, $redirect, $permission)
    {
        $role = Role::find($id);
        if (!$role) {
            return false;
        }
        $role->name = $name;
        $role->description = $description;
        $role->default_redirect = $redirect;
        if (!$role->save()) {
            return false;
        }
        $role->permissions()->detach();
        $role->permissions()->attach($permission);
        return true;
    }
}