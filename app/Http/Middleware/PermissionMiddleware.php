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
    public function handle($request, \Closure $next, $permission)
    {

        if (app('auth')->guest()) {
            return redirect()->route('login');
        }

        $arrPermissions = auth()->user()->role()->first()->permissions()->get()->map(function($item){
            return $item->name;
        })->toArray();

        if (in_array($permission, $arrPermissions)) {
            return $next($request);
        }

        return redirect()->route('login');
    }
}