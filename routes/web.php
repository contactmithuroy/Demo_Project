<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SuperAdminController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/manage-user', [App\Http\Controllers\HomeController::class, 'manage_user'])->name('manage.user');
Route::get('/create-user', [App\Http\Controllers\HomeController::class, 'create_user'])->name('create.user');
Route::get('/manage-edit/{id}', [App\Http\Controllers\HomeController::class, 'manage_edit_page'])->name('manage_users');
Route::post('/manage-edit', [App\Http\Controllers\HomeController::class, 'manage_user_store'])->name('manage_user.store');
Route::get('/user-show/{id}', [App\Http\Controllers\HomeController::class, 'user_show'])->name('users.show');
Route::get('/manage-delete/{id}', [App\Http\Controllers\HomeController::class, 'manage_delete'])->name('manage.delete');

Route::get('custom_logout', function ()
{
    auth()->logout();
    Session()->flush();
    return Redirect::to('/login');
})->name('custom_logout');

Route::resource('/super-admin', SuperAdminController::class);
Route::resource('/admin', AdminController::class);
Route::resource('/user', UserController::class);