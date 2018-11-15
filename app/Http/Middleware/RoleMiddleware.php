<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/17/2018
 * Time: 4:12 PM
 */

namespace App\Http\Middleware;


use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, \Closure $next, $roles)
    {
        if (app('auth')->guest()) {
            return redirect()->route('login');
        }

        $arrRoles = is_array($roles)
            ? $roles
            : explode('|', $roles);
        if (auth()->user()->role() && in_array(auth()->user()->role()->first()->name, $arrRoles)) {
            return $next($request);
        }

        return abort(404);

    }
}