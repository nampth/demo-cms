<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/17/2018
 * Time: 1:40 PM
 */

namespace App\Http\Middleware;


class PasswordExpires
{
    public function handle($request, \Closure  $next){
        $user = $request->user();

        if(is_numeric(config('access.users.password_expires_day')) && $user->canChangePassword()){
            $password_changed_at = new Carbon($user->password_changed_at ?: $user->created_at);

            if (Carbon::now()->diffInDays($password_changed_at) >= config('access.users.password_expires_days')) {
                return redirect()->route('frontend.auth.password.expired');
            }
        }
        return $next($request);
    }
}