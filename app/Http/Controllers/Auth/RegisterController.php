<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $attributes = [
            'username' => 'Tên đăng nhập',
            'email' => 'Địa chỉ Email',
            'fullname' => 'Tên đầy đủ',
            'password' => 'Mật khẩu',
            'rpassword' => 'Xác nhận mật khẩu',
        ];
        return Validator::make($data, [
            'username' => 'required|string|max:100|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'fullname' => 'nullable|min:6|max:100',
            'password' => 'required|string|min:6|same:rpassword',
            'rpassword' => 'required|string|min:6',
        ], [], $attributes);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'fullname' => $data['fullname'],
            'password' => Hash::make($data['password']),
            'status' => USER_STATUS_ACTIVE
        ]);
        if (!$user) {
            return false;
        }
        $role = Role::where('name', USER_ROLE_NORMAL)->first();
        if (!$role) {
            return false;
        }
        $user->role()->attach(intval($role->id));
        return $user;
    }
}
