<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialMediaRequest;
use App\Http\Traits\FileTrait;
use App\Http\Traits\PermissionTrait;
use App\Models\Admin\SocialMedia;
use App\Repositories\Eloquent\SocialMedia\SocialMediaRepository;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SocialMediaController extends Controller
{
    use SoftDeletes, FileTrait, PermissionTrait;

    public $table, $repository;

    public function __construct(SocialMediaRepository $repository)
    {
        $this->permission('social-media');
        $this->table = app(SocialMedia::class);
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $redesSociais = $this->table->where('status', true)->get();
        return view('admin.social-media.index', compact('redesSociais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.social-media.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SocialMediaRequest $request)
    {
        try {
            if ($this->repository->upInsert($request)) {
                Cache::pull('social-media');

                return redirect()
                    ->route('social-media.index')
                    ->with('success', 'Os dados foram salvos com sucesso!');
            }
            throw new \Exception();
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Ocorreu um erro ao salvar os dados: Falha ao inserir os dados no banco de dados.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $socialMedia = $this->table->findOrFail($id);
        return view('admin.social-media.form', compact('socialMedia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SocialMediaRequest $request, $id)
    {
        try {
            if ($this->repository->upInsert($request, $id)) {
                Cache::pull('social-media');

                return redirect()
                    ->route('social-media.index')
                    ->with('success', 'Os dados foram salvos com sucesso!');
            }
            throw new \Exception();
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Ocorreu um erro ao salvar os dados: Falha ao inserir os dados no banco de dados.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            $post = $this->table->findOrFail($request->id);
            $post->delete();
            Cache::pull('social-media');
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
