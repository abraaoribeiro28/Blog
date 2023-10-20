<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Admin\CategoryPost;
use App\Models\Admin\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostController extends Controller
{
    use SoftDeletes;

    public $table;

    public function __construct()
    {
        $this->table = app(Post::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = $this->table
            ->with('categoryPost')
            ->orderBy('publication_date', 'desc')
            ->get();

        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryPost::all();
        return view('admin.post.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
