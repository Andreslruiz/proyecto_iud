<?php

namespace App\Http\Controllers;

use App\Models\desarrollo;
use App\Http\Requests\StoreCategory;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $categories = desarrollo::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.desarrollo.index', ['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('dashboard.desarrollo.create', ['desarrollo' => new desarrollo()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        desarrollo::create($request->validated());
        return back()->with('status', 'Materia creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(desarrollo $desarrollo)
    {
        return view('dashboard.desarrollo.show', ["desarrollo" => $desarrollo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(desarrollo $desarrollo)
    {
        return view('dashboard.desarrollo.edit', ["desarrollo" => $desarrollo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategory $request, desarrollo $desarrollo)
    {
        $desarrollo->update($request->validated());
        return back()->with('status', 'Materia editada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(desarrollo $desarrollo)
    {
        $desarrollo->delete();
        return back()->with('status', 'Materia eliminada con éxito');
    }
}
