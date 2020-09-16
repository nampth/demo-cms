<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 11/6/2018
 * Time: 10:21 AM
 */

namespace App\Repositories\Backend;


use App\Models\Backend\Permission;
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

        if ($orderBy) {
            $query = $query->orderBy($orderBy, $orderType);
        }

        if ($countAll) {
            return $query->count();
        }else{
            $query = $query->limit($length)->offset($start);
        }

        return $query->get();
    }

}