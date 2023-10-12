<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConfigurationRequest;
use App\Models\Admin\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{

    public $title, $table;

    public function __construct()
    {
        $this->title = 'Configurações';
        $this->table = app(Configuration::class);
    }

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        foreach ($this->table->all() as $item) {
            $configurationsArray[$item->key] = [
                'title' => $item->title,
                'description' => $item->description,
                'value' => $item->value,
            ];
        }

        return view('admin.configuration.edit', ['config' => $configurationsArray]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ConfigurationRequest $request, string $id)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
