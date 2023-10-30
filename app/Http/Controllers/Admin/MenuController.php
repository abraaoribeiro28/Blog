<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Admin\Menu;
use App\Repositories\Eloquent\Menu\MenuRepository;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public $table, $repository;

    public function __construct(MenuRepository $repository)
    {
        $this->table = app(Menu::class);
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = $this->table->with('children')
            ->whereNull('menus_id')
            ->orderBy('order')
            ->get();
        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = $this->table->all();
        return view('admin.menu.form', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuRequest $request)
    {
        try {
            if ($result = $this->repository->upInsert($request)) {
                return redirect()
                    ->route('menus.index')
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
    public function edit(Menu $menu)
    {
        $menus = $this->table->all();
        return view('admin.menu.form', compact('menus', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuRequest $request, string $id)
    {
        try {
            if ($result = $this->repository->upInsert($request, $id)) {
                return redirect()
                    ->route('menus.index')
                    ->with('success', 'Os dados foram atualizados com sucesso!');
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
            $menu = $this->table->findOrFail($request->id);
            $menu->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function order(Request $request)
    {
        try {
            $data = $request->all();
            foreach ($data as $key => $value){
                $menu = $this->table->find($value);
                $menu->order = $key + 1;
                $menu->update();
            }
            return true;
        } catch (\Throwable $th){
            return false;
        }
    }
}
