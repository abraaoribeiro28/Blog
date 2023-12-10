<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConfigurationRequest;
use App\Models\Admin\Configuration;
use App\Repositories\Eloquent\Configuration\ConfigurationRepository;
use App\Http\Traits\PermissionTrait;
use App\Http\Traits\FileTrait;
use Illuminate\Support\Facades\DB;

class ConfigurationController extends Controller
{
    use PermissionTrait, FileTrait;

    public $table, $repository;

    public function __construct(ConfigurationRepository $repository)
    {
        $this->permission('configuracoes');
        $this->table = app(Configuration::class);
        $this->repository = $repository;
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
        DB::beginTransaction();
        try {
            $result = $this->repository->upInsert($request, $id);
            $color = $this->saveColors('storage/configurations/colors.css');
            if($result && $color){
                DB::commit();
                return redirect()
                    ->back()
                    ->with('success', 'Os dados foram atualizados com sucesso!');
            }
            throw new \Exception();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Ocorreu um erro ao salvar os dados: Falha ao inserir os dados no banco de dados.');
        }
    }
}
