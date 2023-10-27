<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Admin\Archive;
use App\Models\Admin\CategoryPost;
use App\Models\Admin\Post;
use App\Repositories\Eloquent\Post\PostRepository;
use Illuminate\Http\Request;
use App\Http\Traits\FileTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class PostController extends Controller
{
    use SoftDeletes, FileTrait;

    public $table, $repository;

    public function __construct(PostRepository $repository)
    {
        $this->table = app(Post::class);
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = $this->table
            ->with('category')
            ->orderBy('publication_date', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryPost::where('status', true)->get();
        return view('admin.post.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        try {
            if ($result = $this->repository->upInsert($request)) {
                $this->uploadHighlightArchive($result, $request);
                return redirect()
                    ->route('posts.index')
                    ->with('success', 'Os dados foram salvos com sucesso!');
            }
        } catch (\Throwable $th) {}

        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar os dados no banco de dados. Por favor, tente novamente!');
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
        $categories = CategoryPost::all();
        $highlight = $post->archives->where('highlight')[0] ?? null;
        return view('admin.post.form', compact('post', 'categories', 'highlight'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        try {
            if ($result = $this->repository->upInsert($request, $post->id)) {
                $this->uploadHighlightArchive($result, $request, $post->id);
                return redirect()
                    ->route('posts.index')
                    ->with('success', 'Os dados foram salvos com sucesso!');
            }
        } catch (\Throwable $th) {}

        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar os dados no banco de dados. Por favor, tente novamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $post = Post::findOrFail($request->id);
            $post->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
