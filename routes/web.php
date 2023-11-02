<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ConfigurationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ArchiveController;
use App\Http\Controllers\Admin\CategoryPostController;
use App\Http\Controllers\Portal\HomeController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\InstagramPostController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', HomeController::class)->name('portal.home');

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    // Dashboard
    Route::redirect('/', '/admin/dashboard');
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('configurations', ConfigurationController::class)->only(['edit', 'update']);
    Route::resource('posts/categories', CategoryPostController::class);
    Route::resource('posts', PostController::class);
    Route::resource('instagram', InstagramPostController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('users', UserController::class);

    // ajax
    Route::post('posts/delete', [PostController::class, 'destroy']);
    Route::post('posts/delete-highlight', [ArchiveController::class, 'deletePostHighlight']);
    Route::post('posts/categories/delete', [CategoryPostController::class, 'destroy']);
    Route::post('menu-order', [MenuController::class, 'order']);
    Route::post('menus/delete', [MenuController::class, 'destroy']);
    Route::post('instagram-post/delete', [InstagramPostController::class, 'destroy']);
});

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';
