<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryPostRequest;
use App\Models\Admin\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryPostController extends Controller
{
    use SoftDeletes;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CategoryPost::with('posts')->get();
        return view('admin.post-categories.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post-categories.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryPostRequest $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryPost $categoryPost)
    {
        //
    }
}
