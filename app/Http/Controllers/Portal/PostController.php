<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\Admin\CategoryPost;
use App\Models\Admin\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($slug = null)
    {
        $categories = CategoryPost::where('status', true)->get();
        $categoriesIds = $categories->pluck('id');
    
        $query = Post::with('category', 'highlightArchive')
            ->where('status', true)
            ->where('publication_date', '<=', date('Y-m-d H:i'))
            ->orderByDesc('publication_date');

        if($slug){
            $category =  CategoryPost::where('slug', $slug)->first();
            $posts = $query->where('category_posts_id', $category->id)->paginate();
        }else{
            $category = false;
            $posts = $query->whereIn('category_posts_id', $categoriesIds)->paginate();
        }

        return view('portal.pages.post.index', compact('posts', 'categories', 'category'));
    }

    
    public function show(string $slug)
    {
        $post = Post::with('category', 'highlightArchive', 'archivesGallery')
            ->where('slug', $slug)
            ->firstOrFail();

        $recentPosts = Post::with('category', 'highlightArchive')
            ->where('status', true)
            ->whereNot('id', $post->id)
            ->where('publication_date', '<=', date('Y-m-d H:i'))
            ->orderByDesc('publication_date')
            ->limit(3)
            ->get();

        $recentPostIds = $recentPosts->pluck('id');

        $popularPosts = Post::with('category', 'highlightArchive')
            ->where('status', true)
            ->whereNot('id', $post->id)
            ->whereNotIn('id', $recentPostIds)
            ->orderByDesc('clicks')
            ->limit(3)
            ->get();

        $sideContent = count($recentPosts) + count($popularPosts) > 0;

        $post->increment('clicks');

        return view('portal.pages.post.show', compact('post', 'recentPosts', 'popularPosts', 'sideContent'));
    }
}
