<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Responsável por carregar a página inicial do portal.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $posts = Post::with('category', 'highlightArchive')
            ->where('status', true)
            ->orderByDesc('publication_date')
            ->limit(3)
            ->get();

        $mostViewedPost = Post::with('highlightArchive')
            ->orderByDesc('clicks')
            ->first();

        return view('portal.pages.home', compact('posts', 'mostViewedPost'));
    }
}
