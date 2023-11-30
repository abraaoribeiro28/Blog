<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InstagramPostRequest;
use App\Http\Traits\PermissionTrait;
use App\Models\Admin\InstagramPost;
use App\Repositories\Eloquent\InstagemPost\InstagemPostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class InstagramPostController extends Controller
{
    use PermissionTrait;

    public $table, $repository;

    public function __construct(InstagemPostRepository $repository){
        $this->permission('instagram');
        $this->table = app(InstagramPost::class);
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = $this->table->orderBy('status', 'desc')->get();
        return view('admin.instagram-post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.instagram-post.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InstagramPostRequest $request)
    {
        try {
            if ($result = $this->repository->upInsert($request)) {
                Cache::pull('instagramPosts');
                return redirect()
                    ->route('instagram.index')
                    ->with('success', 'Os dados foram salvos com sucesso!');
            }
        } catch (\Throwable $th) {}

        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar os dados no banco de dados. Por favor, tente novamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = $this->table->findOrFail($id);
        return view('admin.instagram-post.form', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InstagramPostRequest $request, string $id)
    {
        try {
            if ($result = $this->repository->upInsert($request, $id)) {
                Cache::pull('instagramPosts');
                return redirect()
                    ->route('instagram.index')
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
            $post = $this->table->findOrFail($request->id);
            $post->delete();
            Cache::pull('instagramPosts');
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
