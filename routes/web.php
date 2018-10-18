<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'role:admin'], function () {
    include_route_files(__DIR__ . '/backend/');
});

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__ . '/frontend/');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/home', function () {
    if (Auth::check()) {
        if (Auth::user()->role()->first()->name == 'admin') {
            return redirect(route('admin.dashboard.index'));
        } else {
            return redirect(route('frontend.index'));
        }
    } else {
        return redirect(route('login'));
    }

})->name('home');
Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');