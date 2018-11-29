<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/17/2018
 * Time: 2:20 PM
 */

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home.index');
    }
}