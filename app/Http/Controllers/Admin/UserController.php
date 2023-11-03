<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Repositories\Eloquent\User\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

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
        $users = $this->table->with('roles')->get();
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
        try {
            if ($user = $this->repository->upInsert($request)) {
                foreach (json_decode($request->roles) as $role) {
                    $role = Role::find($role);
                    $user->assignRole($role);
                }
                return redirect()
                    ->route('users.index')
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
