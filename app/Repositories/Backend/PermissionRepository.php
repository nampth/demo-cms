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

    public function listing($keyword = "", $start = 0, $length = 10, $orderBy = '', $orderType = 'asc', $countAll = true)
    {
        $query = $this->model;
        if ($keyword) {
            $query = $query->where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%");
        }

        $query = $query->limit($length)->offset($start);
        if ($orderBy) {
            $query = $query->orderBy($orderBy, $orderType);
        }

        if ($countAll) {
            return $query->count();
        }
        return $query->get();
    }


    public function listingAll()
    {
        return $this->model->all();
    }

    public function add($name, $description)
    {
        $permission = new Permission();
        $permission->name = $name;
        $permission->description = $description;
        return $permission->save();
    }

    public function deletePermission($id)
    {
        $permission = Permission::find($id);
        return $permission->delete();
    }

    public function update($id, $name, $description)
    {
        $permission = Permission::find($id);
        if (!$permission) {
            return false;
        }
        $permission->name = $name;
        $permission->description = $description;
        return $permission->save();
    }
}