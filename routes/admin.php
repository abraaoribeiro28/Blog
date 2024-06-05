<?php

use App\Http\Controllers\Admin\ArchiveController;
use App\Http\Controllers\Admin\CategoryPostController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EbookController;
use App\Http\Controllers\Admin\InstagramPostController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::redirect('/', '/admin/dashboard');
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::resource('configurations', ConfigurationController::class)->only(['edit', 'update']);
    Route::resource('posts/categories', CategoryPostController::class);
    Route::resource('posts', PostController::class);
    Route::resource('instagram', InstagramPostController::class);
    Route::resource('ebooks', EbookController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('social-media', SocialMediaController::class);
    Route::resource('users', UserController::class);
    Route::resource('profiles', RoleController::class);

    // ajax
    Route::post('posts/delete', [PostController::class, 'destroy']);
    Route::post('social-media/delete', [SocialMediaController::class, 'destroy']);
    Route::post('delete-highlight', [ArchiveController::class, 'deleteHighlight']);
    Route::post('posts/categories/delete', [CategoryPostController::class, 'destroy']);
    Route::post('menu-order', [MenuController::class, 'order']);
    Route::post('menus/delete', [MenuController::class, 'destroy']);
    Route::post('profiles/delete', [RoleController::class, 'destroy']);
    Route::post('instagram-post/delete', [InstagramPostController::class, 'destroy']);
    Route::post('users/state', [UserController::class, 'toggleState']);
    Route::post('ebooks/state', [EbookController::class, 'toggleState']);
    Route::post('upload-gallery', [ArchiveController::class, 'postImages']);
    Route::post('delete-archive-gallery', [ArchiveController::class, 'deleteArchiveGallery']);
});

require __DIR__.'/auth.php';
