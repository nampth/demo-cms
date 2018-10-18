<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/16/2018
 * Time: 1:43 PM
 */

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        return view('backend.dashboard.index');
    }
}