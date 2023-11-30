<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConfigurationRequest;
use App\Models\Admin\Configuration;
use App\Repositories\Contracts\IConfigurationRepository;
use App\Repositories\Eloquent\Configuration\ConfigurationRepository;
use Illuminate\Http\Request;
use App\Http\Traits\PermissionTrait;

class ConfigurationController extends Controller
{
    use PermissionTrait;

    public $table, $repository;

    public function __construct(ConfigurationRepository $repository)
    {
        $teste = $this->permission('configuracoes');

        $this->table = app(Configuration::class);
        $this->repository = $repository;
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
        try {
            if($this->repository->upInsert($request, $id)){
                return redirect()
                    ->back()
                    ->with('success', 'Os dados foram atualizados com sucesso!');
            }
        } catch (\Exception $exception) {
            // ...
        }

        return redirect()
                ->back()
                ->with('error', 'Ocorreu um erro ao atualizar os dados no banco de dados. Por favor, tente novamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
