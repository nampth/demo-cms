<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 11/16/2018
 * Time: 3:54 PM
 */

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class SaleController extends Controller
{
    protected $repo;

    public function __construct()
    {
    }

    public function dashboard()
    {
        return view('backend.sale.index');
    }
}