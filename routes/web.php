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
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Common\UserController;

Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'role:admin'], function () {
    include_route_files(__DIR__ . '/backend/');
});

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__ . '/frontend/');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/home', function () {
    if (Auth::check()) {
        return redirect(Auth::user()->role()->first()->default_redirect);
    } else {
        return redirect('login');
    }
})->name('home');
Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['namespace' => 'User', 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/changepass', [UserController::class, 'changepassHome'])->name('changepassHome');
    Route::post('/changepass', [UserController::class, 'changePass'])->name('changepass');
});