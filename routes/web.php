<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;




Route::get('/login', [AuthController::class, 'index'])->name('login');

Route::post('/auth', [AuthController::class, 'postLogin'])->name('post.login');

Route::group(['middleware' => 'auth'], function (){

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/users', [UsersController::class, 'index'])->name('users.index');

Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');

Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');

Route::get('/users/show/{id}', [UsersController::class, 'show'])->name('users.show');

Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');

Route::post('/users/update/{id}', [UsersController::class, 'update'])->name('users.update');

Route::get('/users/delete/{id}', [UsersController::class, 'delete'])->name('users.delete');

Route::get('/clients/index', [ClientsController::class, 'index'])->name('clients.index');

Route::get('/clients/create', [ClientsController::class, 'create'])->name('clients.create');

Route::post('/clients/store', [ClientsController::class, 'store'])->name('clients.store');

});


