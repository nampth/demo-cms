<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/17/2018
 * Time: 4:10 PM
 */

namespace App\Http\Middleware;


class PermissionMiddleware
{
    public function handle($request, \Closure $next, $permissions){
        if (app('auth')->guest()) {
            return redirect()->route('login');
        }
        $arrPermissions = is_array($permissions)
            ? $permissions
            : explode('|', $permissions);

        foreach ($arrPermissions as $permission) {
            if (app('auth')->user()->can($permission)) {
                return $next($request);
            }
        }
        return redirect()->route('login');
    }
}