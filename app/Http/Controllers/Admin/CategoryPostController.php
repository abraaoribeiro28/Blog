<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryPostRequest;
use App\Models\Admin\CategoryPost;
use App\Models\Admin\Post;
use App\Repositories\Eloquent\CategoryPost\CategoryPostRepository;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use TheSeer\Tokenizer\Exception;
use function Symfony\Component\Translation\t;

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
                    ->route('categories.index')
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
    public function edit($id)
    {
        $category = $this->table->findOrFail($id);
        return view('admin.post-categories.form', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryPostRequest $request, $id)
    {
        try {
            if ($result = $this->repository->upInsert($request, $id)) {
                return redirect()
                    ->route('categories.index')
                    ->with('success', 'Os dados foram atualizados com sucesso!');
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
            $category = $this->table->findOrFail($request->id);
            $category->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
