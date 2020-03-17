<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 3/17/2020
 * Time: 9:29 AM
 */

namespace App\Http\Controllers\Common;

use App\Http\Requests\User\UserChangePassRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userRepo;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    public function changepassHome()
    {
        return view('user.changepass.index');
    }

    public function changePass(UserChangePassRequest $request)
    {
        $old = $request->input('old_pass');
        $new = $request->input('password');

        if (!Hash::check($old, Auth::user()->password)) {
            return response()->json([
                'code' => ERROR_CODE,
                'message' => 'Mật khẩu bạn vừa nhập không chính xác.'
            ]);
        }

        return response()->json([
            'code' => $this->userRepo->userChangePass($old, $new) ? SUCCESS_CODE : ERROR_CODE
        ]);
    }
}