<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use App\Models\Subscriber;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    /**
     * Busca os dados para exibição na dashboard
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        $queryPosts = Cache::remember('activePosts', 3600, function () {
            return Post::with('category')->where('status', true)->get();
        });

        $activePostsCount = Cache::remember('activePostsCount', 3600, function () use ($queryPosts) {
            return $queryPosts->count();
        });

        $clicksPostsCount = Cache::remember('clicksPostsCount', 3600, function () use ($queryPosts) {
            return $queryPosts->sum('clicks');
        });

        $subscribersCount = Cache::remember('subscribersCount', 3600, function () {
            return Subscriber::count();
        });

        $mostViewedPosts = Cache::remember('mostViewedPosts', 3600, function () use ($queryPosts) {
            return $queryPosts->sortByDesc('clicks')->take(5);
        });

        return view('admin.dashboard', compact('activePostsCount', 'clicksPostsCount', 'subscribersCount', 'mostViewedPosts'));
    }
}
