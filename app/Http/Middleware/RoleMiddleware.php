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

        foreach ($arrRoles as $role) {
            if (auth()->user()->hasRole($arrRoles)) {
                return $next($request);
            }
        }

        return redirect()->route('login');

    }
}