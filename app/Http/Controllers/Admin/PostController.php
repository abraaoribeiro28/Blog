<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Admin\CategoryPost;
use App\Models\Admin\Post;
use App\Repositories\Eloquent\Post\PostRepository;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostController extends Controller
{
    use SoftDeletes;

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
        try {
            if ($result = $this->repository->upInsert($request)) {
                return redirect()
                        ->back()
                        ->with('success', 'Os dados foram atualizados com sucesso!');
            }
            dd($result);
        } catch (\Throwable $th) {
            //
            dd($th);
        }

        return redirect()
                ->back()
                ->with('error', 'Ocorreu um erro ao atualizar os dados no banco de dados. Por favor, tente novamente!');
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
