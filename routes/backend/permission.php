<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 11/6/2018
 * Time: 10:18 AM
 */

use App\Http\Controllers\Backend\PermissionController;

Route::group(['namespace' => 'Permission', 'prefix' => 'permission', 'as' => 'role.', 'middleware'=>'permission:' . ADMIN_PERMISSION_MANAGEMENT], function () {
    Route::get('/', [PermissionController::class, 'index'])->name('index');
    Route::post('/listing', [PermissionController::class, 'listing'])->name('listing');
    Route::post('/listingAll', [PermissionController::class, 'listingAll'])->name('listingAll');
});
