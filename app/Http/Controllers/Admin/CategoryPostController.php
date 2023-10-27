<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryPostRequest;
use App\Models\Admin\CategoryPost;
use App\Repositories\Eloquent\CategoryPost\CategoryPostRepository;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use TheSeer\Tokenizer\Exception;

class CategoryPostController extends Controller
{
    use SoftDeletes;

    public $table, $repository;

    public function __construct(CategoryPostRepository $repository)
    {
        $this->table = app(CategoryPost::class);
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->table->with('posts')->orderBy('id', 'desc')->get();
        return view('admin.post-categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post-categories.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryPostRequest $request)
    {
        try {
            if ($result = $this->repository->upInsert($request)) {
                return redirect()
                    ->route('posts-categories.index')
                    ->with('success', 'Os dados foram salvos com sucesso!');
            }
        } catch (\Throwable $th) {}

        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar os dados no banco de dados. Por favor, tente novamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryPost $categoryPost)
    {
        //
    }
}
