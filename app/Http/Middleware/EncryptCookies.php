<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    public function handle($request, Closure $next)
    {
        $response = $next($request);
        //If the status is not approved redirect to login
        if (Auth::check() && Auth::user()->status != USER_STATUS_ACTIVE) {
            Auth::logout();
            return redirect('/login')->with('error_login', 'Your error text');
        }
        return $response;
    }
}
