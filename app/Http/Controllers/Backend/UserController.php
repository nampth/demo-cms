<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/18/2018
 * Time: 2:50 PM
 */

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        return view('backend.user.index');
    }
}