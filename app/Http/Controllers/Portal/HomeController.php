<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\Admin\InstagramPost;
use App\Models\Admin\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Responsável por carregar a página inicial do portal.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke(Request $request)
    {

        $posts = Cache::remember('posts', 3600, function () {
            return Post::with('category', 'highlightArchive')
                ->where('status', true)
                ->orderByDesc('publication_date')
                ->limit(3)
                ->get();
        });

        $mostViewedPost = Cache::remember('mostViewedPost', 3600, function () {
            return Post::with('highlightArchive')
                ->orderByDesc('clicks')
                ->first();
        });

        $instagramPosts = Cache::remember('instagramPosts', 3600, function () {
            return InstagramPost::where('status', true)->get();
        });

        return view('portal.pages.home', compact('posts', 'mostViewedPost', 'instagramPosts'));
    }
}
