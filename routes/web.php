<?php


use App\Http\Controllers\Admin\ArchiveController;
use App\Http\Controllers\Portal\HomeController;
use App\Http\Controllers\Portal\PostController;
use App\Http\Controllers\Portal\SubscriberController;
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

Route::get('/', HomeController::class)->name('portal.home');

// Postagens
Route::get('posts', [PostController::class, 'index'])->name('portal.posts.index');
Route::get('posts/{categry}', [PostController::class, 'index'])->name('portal.posts.category');
Route::get('post/{slug}', [PostController::class, 'show'])->name('posts.show');

// Subscriber
Route::post('ajax-subscribe', [SubscriberController::class, 'store'])->name('ajax.subscribe');

Route::post('/images', [ArchiveController::class, 'imagesGallery']);

require __DIR__.'/auth.php';

//Route::get('/send', function () {
//    $post = \App\Models\Admin\Post::first();
//   \App\Jobs\SendEmailsJob::dispatch($post);
//});
