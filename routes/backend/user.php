<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/18/2018
 * Time: 2:49 PM
 */
use App\Http\Controllers\Backend\UserController;

Route::group(['namespace' => 'User', 'prefix' => 'user', 'as' => 'user.', 'middleware'=>'permission:' . ADMIN_USER_MANAGEMENT], function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::post('/listing', [UserController::class, 'listing'])->name('listing');
});
