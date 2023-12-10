<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EbookRequest;
use App\Http\Traits\FileTrait;
use App\Http\Traits\PermissionTrait;
use App\Models\Admin\Ebook;
use App\Repositories\Eloquent\Ebook\EbookRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EbookController extends Controller
{
    use FileTrait, PermissionTrait;

    public $table, $repository;

    public function __construct(EbookRepository $repository)
    {
        $this->permission('ebooks');
        $this->table = app(Ebook::class);
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ebooks = $this->table->orderByDesc('publication_date')->get();
        return view('admin.ebook.index', compact('ebooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ebook.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EbookRequest $request)
    {
        DB::beginTransaction();
        try {
            if ($ebook = $this->repository->upInsert($request)){
                $this->uploadHighlightArchive($ebook, $request);
                $this->uploadEbook($ebook, $request);
                Cache::pull('ebooks');
                DB::commit();
                return redirect()
                    ->route('ebooks.index')
                    ->with('success', 'Os dados foram salvos com sucesso!');
            }
            throw new Exception('Não foi possível criar o e-book.');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()
                ->back()
                ->with('error', 'Ocorreu um erro ao salvar os dados: ' . $e->getMessage());
        }
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
    public function edit(Ebook $ebook)
    {
        $highlight = $ebook->highlightArchive;
        return view('admin.ebook.form', compact('ebook', 'highlight'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EbookRequest $request, string $id)
    {
        DB::beginTransaction();
        try {
            if ($ebook = $this->repository->upInsert($request, $id)){
                $this->uploadHighlightArchive($ebook, $request, $id);
                $this->uploadEbook($ebook, $request, $id);
                Cache::pull('ebooks');
                DB::commit();
                return redirect()
                    ->route('ebooks.index')
                    ->with('success', 'Os dados foram atualizados com sucesso!');
            }
            throw new Exception('Não foi possível atualizar o e-book.');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()
                ->back()
                ->with('error', 'Ocorreu um erro ao salvar os dados: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function toggleState(Request $request)
    {
        try {
            $ebook = $this->table->findOrFail($request->id);
            $ebook->status = $request->status;
            $ebook->update();
            Cache::pull('ebooks');
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
