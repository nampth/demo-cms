<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/25/2018
 * Time: 1:41 PM
 */

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\User;

class UserRepository extends BaseRepository
{
    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        // TODO: Implement model() method.
        return User::class;
    }

    public function listing($keyword = "", $start = 0, $length = 10, $orderBy = '', $orderType = 'asc', $countAll = true)
    {
        $query = $this->model->with('role');
        if ($keyword) {
            $query = $query->where('username', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%");
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
}