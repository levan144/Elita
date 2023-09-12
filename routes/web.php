<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VuesyController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NotificationController;

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



// Route::get('/', [App\Http\Controllers\VuesyController::class, 'login'])->name('home');
Route::get('/login', [App\Http\Controllers\VuesyController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\VuesyController::class, 'register'])->name('register');
// Route::resource('users', [UserController::class]);

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // Route::get('{any}', [VuesyController::class, 'index'])->name('index');
    // Route::resource('users',UserController::class);
    Route::get('/', [HomeController::class, 'index'])->name('home');

    //Projects
    // Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');   
    // Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');   
    Route::resource('projects', ProjectController::class);
    Route::resource('users', UserController::class);

    //Projects
    Route::get('reports', [UserController::class, 'index'])->name('reports.index');   

    //Announcements
    Route::get('announcements', [UserController::class, 'index'])->name('announcements.index');   

    //Notification
    Route::get('/send-notification', [NotificationController::class, 'send'])->name('send.notification');


   

    // Route::get('users', [UserController::class, 'index'])->name('users-index');   
    Route::get('delete-users/{id}', [UserController::class, 'destroy'])->name('delete-user');   
    Route::get('users-edit/{id}', [UserController::class, 'edit'])->name('users-edit');   
    Route::post('users-update/{id}', [UserController::class, 'update'])->name('user-update');   

    Route::get('roles', [RoleController::class, 'index'])->name('show-roles');   
    Route::get('roles-create', [RoleController::class, 'create'])->name('create-roles');   
    Route::post('store-roles', [RoleController::class, 'store'])->name('store-roles');   
    Route::get('/roles', [RoleController::class, 'index'])->name('roles');   
});


