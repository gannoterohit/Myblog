<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', [UserController::class, 'home'])->name('/');
Route::get('create-post', [UserController::class, 'create_post'])->name('create-post')->middleware('auth');;
Route::post('store-post', [UserController::class, 'store_post'])->name('store-post');
Route::post('imgupload', [UserController::class, 'ckeditor_upload'])->name('imgupload');
Route::get('my-post', [UserController::class, 'my_post'])->name('my-post');
Route::get('edit-post/{id}', [UserController::class, 'edit_post'])->name('edit-post');
Route::post('post-update', [UserController::class, 'post_update'])->name('post-update');
Route::get('delete-post/{id}', [UserController::class, 'delete_post'])->name('delete-post');


Route::get('all-user', [AdminController::class, 'all_user'])->name('all-user');
Route::get('admin-delete-post/{id}', [AdminController::class, 'admin_delete_post'])->name('admin-delete-post');
Route::get('admin-edit-post/{id}', [AdminController::class, 'admin_edit_post'])->name('admin-edit-post');
Route::post('admin-update-post', [AdminController::class, 'admin_post_update'])->name('admin-update-post');
Route::get('admin-blockuser/{id}', [AdminController::class, 'admin_blockuser'])->name('admin-blockuser');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth:admin', 'verified'])->name('adminauth/dashboard');

Route::middleware('auth:admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('admin/dashboard', [AdminController::class, 'dashbord'])->name('admin.dashboard');

});

require __DIR__ . '/adminauth.php';
