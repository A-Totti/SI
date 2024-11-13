<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TambahDosenController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('\home',[HomeController::class,'index'])->middleware('auth')->name('home');

route::get('post',[HomeController::class,'post']);

Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');

//Admin Routes List
route::get('/admin/tambah', [TambahDosenController::class, 'index'])->name('admin/tambah');

route::get('/Home', [HomeController::class, 'index'])-> name('Home') ;
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/post', [PostController::class, 'index'])->name('orders.index');
});

require __DIR__.'/auth.php';
