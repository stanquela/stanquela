<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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

//Public routes
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/show-blog/{id}', [BlogController::class, 'showBlog'])->name('showBlog');

//Private routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('addBlog');
    Route::post('/save-blog', [BlogController::class, 'saveBlog'])->name('saveBlog');
    Route::get('/edit-blog/{id}', [BlogController::class, 'editBlog'])->name('editBlog');
    Route::post('/save-edit-blog/{id}', [BlogController::class, 'saveEditBlog'])->name('saveEditBlog');
    Route::delete('/delete-blog/{id}', [BlogController::class, 'deleteBlog'])->name('deleteBlog');
    //edit, saveedit, delete blog routes
});

require __DIR__.'/auth.php';
