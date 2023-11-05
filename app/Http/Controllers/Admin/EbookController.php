<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EbookRequest;
use App\Models\Admin\Ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public $table;

    public function __construct()
    {
        $this->table = app(Ebook::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ebooks = $this->table->all();
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
        dd($request->all());
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

    public function toggleState(Request $request)
    {
        try {
            $ebook = $this->table->findOrFail($request->id);
            $ebook->status = $request->status;
            $ebook->update();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
