<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/25/2018
 * Time: 1:41 PM
 */

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Role;
use App\User;
use Illuminate\Support\Facades\Auth;

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
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('fullname', 'LIKE', "%$keyword%");
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

    public function add($username, $password, $fullname, $email, $roleId)
    {
        $role = Role::find($roleId);
        if (!$role) {
            return false;
        }
        $user = new User();
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->fullname = $fullname;
        $user->email = $email;
        $user->status = USER_STATUS_ACTIVE;
        if (!$user->save()) {
            return false;
        }
        $user->role()->attach($role);
        return true;
    }

    public function status($id)
    {
        $user = User::find($id);
        if ($user->username != 'nampth') {
            $user->status = 1 - intval($user->status);
            return $user->save();
        }
        return false;
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user->username != 'nampth') {
            $user->role()->detach();
            return $user->delete();
        }
        return false;

    }

    public function edit($id, $password, $fullname, $email, $roleId)
    {
        $user = User::find($id);
        $user->role()->detach();
        $user->role()->attach(intval($roleId));
        if ($password) {
            $user->password = bcrypt($password);
        }
        $user->fullname = $fullname;
        $user->email = $email;
        return $user->save();

    }

    public function userChangePass($old, $new)
    {
        $user = Auth::user();
        $user->password = bcrypt($new);
        return $user->save();
    }
}