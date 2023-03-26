<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategory;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $categories = Category::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.category.index', ['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('dashboard.category.create', ['category' => new Category()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        Category::create($request->validated());
        return back()->with('status', 'Categoria creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('dashboard.category.show', ["category" => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.category.edit', ["category" => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategory $request, category $category)
    {
        $category->update($request->validated());
        return back()->with('status', 'Categoria editada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();
        return back()->with('status', 'Categoria eliminada con éxito');
    }
}
