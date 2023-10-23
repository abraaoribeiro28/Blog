<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ConfigurationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ArchiveController;

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
    return view('portal.pages.home');
})->name('portal.home');

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    // Dashboard
    Route::redirect('/', '/admin/dashboard');
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('configurations', ConfigurationController::class)->only(['edit', 'update']);
    Route::resource('posts', PostController::class);
    // ajax
    Route::post('posts/delete', [PostController::class, 'destroy']);
    Route::post('posts/delete-highlight', [ArchiveController::class, 'deletePostHighlight']);
});

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';
