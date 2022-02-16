<?php

use App\Http\Controllers\RQueryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('posts', function() {
    return view('posts');
});


Route::get('/', function () {
    return redirect('login');
})->name('index');

Route::get('r', RQueryController::class)->name('r');

Auth::routes();

Route::match(['PUT', 'PATCH'], 'users/{user}/restore', [UserController::class, 'restore'])->name('users.restore');
Route::resource('users', UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
