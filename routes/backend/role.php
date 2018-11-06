<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/26/2018
 * Time: 2:43 PM
 */

use App\Http\Controllers\Backend\RoleController;

Route::group(['namespace' => 'Role', 'prefix' => 'role', 'as' => 'role.', 'middleware'=>'permission:' . ADMIN_ROLE_MANAGEMENT], function () {
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::post('/listing', [RoleController::class, 'listing'])->name('listing');
    Route::post('/listingAll', [RoleController::class, 'listingAll'])->name('listingAll');
    Route::post('/add', [RoleController::class, 'add'])->name('add');
    Route::post('/update', [RoleController::class, 'update'])->name('update');
    Route::post('/{id}/delete', [RoleController::class, 'deleteRole'])->name('deleteRole');
});
