<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
