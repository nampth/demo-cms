<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 11/6/2018
 * Time: 10:18 AM
 */

use App\Http\Controllers\Backend\PermissionController;

Route::group(['namespace' => 'Permission', 'prefix' => 'permission', 'as' => 'permission.', 'middleware'=>'permission:' . ADMIN_PERMISSION_MANAGEMENT], function () {
    Route::get('/', [PermissionController::class, 'index'])->name('index');
    Route::post('/listing', [PermissionController::class, 'listing'])->name('listing');
    Route::post('/listingAll', [PermissionController::class, 'listingAll'])->name('listingAll');
    Route::post('/add', [PermissionController::class, 'add'])->name('add');
    Route::post('/update', [PermissionController::class, 'update'])->name('update');
    Route::post('/{id}/delete', [PermissionController::class, 'delete'])->name('delete');
});
