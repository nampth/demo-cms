<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/18/2018
 * Time: 9:49 AM
 */

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait RedirectsByRoleTrait
{
    public function redirectPath()
    {
        if (Auth::check() && Auth::user()->role()->first()) {
            return '/admin' . Auth::user()->role()->first()->default_redirect;
        }
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/login';
    }
}