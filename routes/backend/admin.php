<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/16/2018
 * Time: 11:53 AM
 */

use App\Http\Controllers\Backend\DashboardController;

//echo 'vao';die();
/*
 * All route names are prefixed with 'admin.'.
 */
//Route::redirect('/', '/admin/dashboard', 301);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');