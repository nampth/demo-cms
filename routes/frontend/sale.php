<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 11/16/2018
 * Time: 3:51 PM
 */
use App\Http\Controllers\Frontend\SaleController;

Route::group(['namespace' => 'Sale', 'prefix' => 'sale', 'as' => 'sale.', 'middleware'=>'permission:' . SALE_DASHBOARD], function () {
    Route::get('/dashboard', [SaleController::class, 'dashboard'])->name('dashboard');
});
