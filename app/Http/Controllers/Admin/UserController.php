<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Repositories\Eloquent\User\UserRepository;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    public $table, $repository;

    public function __construct(UserRepository $repository)
    {
        $this->table = app(User::class);
        $this->repository = $repository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->table->with('profiles')->get();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.user.form', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        DB::beginTransaction();
        try {
            if ($user = $this->repository->upInsert($request)) {
                $roles = json_decode($request->roles, true);
                $user->assignRole($roles);
                DB::commit();
                return redirect()
                    ->route('users.index')
                    ->with('success', 'Os dados foram salvos com sucesso!');
            }
            throw new Exception('Não foi possível criar o usuário.');
        }  catch (Exception $e) {
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
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.user.form', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        DB::beginTransaction();
        try {
            if ($user = $this->repository->upInsert($request, $id)) {
                $roles = json_decode($request->roles, true);
                $user->syncRoles($roles);
                DB::commit();
                return redirect()
                    ->route('users.index')
                    ->with('success', 'Os dados foram salvos com sucesso!');
            }
            throw new Exception('Usuário não encontrado.');
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
            $user = User::findOrFail($request->id);
            $user->status = $request->status;
            $user->update();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
