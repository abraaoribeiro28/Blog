<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Http\Traits\PermissionTrait;
use App\Models\Resource;
use App\Repositories\Eloquent\Role\RoleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    use PermissionTrait;
    public $table, $repository;

    public function __construct(RoleRepository $repository){
        $this->permission('perfis');
        $this->table = app(Role::class);
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.profiles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $resources = Resource::all();
        return view('admin.profiles.form', compact('resources'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        DB::beginTransaction();
        try {
            $role = $this->repository->upInsert($request);
            $permissions = $request->except('_token', '_method', 'name');
            foreach ($permissions as $key => $value){
                $key = str_replace('_', '.', $key);
                $role->givePermissionTo($key);
            }
            if ($role) {
                DB::commit();
                return redirect()
                    ->route('profiles.index')
                    ->with('success', 'Os dados foram salvos com sucesso!');
            }
            throw new \Exception();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Ocorreu um erro ao salvar os dados: Falha ao inserir os dados no banco de dados.');
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
    public function edit(string $id)
    {
        $role = Role::findById($id);
        $resources = Resource::all();
        return view('admin.profiles.form', compact('role', 'resources'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, string $id)
    {
        DB::beginTransaction();
        try {
            $role = $this->repository->upInsert($request, $id);
            $permissions = $request->except('_token', '_method', 'name');
            $role->syncPermissions();
            foreach ($permissions as $key => $value){
                $key = str_replace('_', '.', $key);
                $role->givePermissionTo($key);
            }
            if ($role) {
                DB::commit();
                return redirect()
                    ->route('profiles.index')
                    ->with('success', 'Os dados foram salvos com sucesso!');
            }
            throw new \Exception();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->back()->with('error', 'Ocorreu um erro ao salvar os dados: Falha ao inserir os dados no banco de dados.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): bool
    {
        try {
            $role = $this->table->findOrFail($request->id);
            $role->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
