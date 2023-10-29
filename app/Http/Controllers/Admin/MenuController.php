<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public $table, $repository;

    public function __construct()
    {
        $this->table = app(Menu::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $menus = $this->table->all();
        $menus = $this->table->with('children')->whereNull('menus_id')->orderBy('order')->get();
        return view('admin.menu.index', compact('menus'));
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
