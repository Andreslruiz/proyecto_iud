<?php

namespace App\Http\Controllers;

use App\Models\administracion;
use App\Http\Requests\StorePost;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $posts = administracion::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.administracion.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('dashboard.administracion.create', ['administracion' => new administracion()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        administracion::create($request->validated());
        return back()->with('status', 'Publicación creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(administracion $administracion)
    {
        return view('dashboard.administracion.show', ["administracion" => $administracion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(administracion $administracion)
    {
        return view('dashboard.administracion.edit', ["administracion" => $administracion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePost $request, administracion $administracion)
    {   
        $administracion->update($request->validated());
        return back()->with('status', 'Publicación editada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(administracion $administracion)
    {
        $administracion->delete();
        return back()->with('status', 'Publicación eliminada con éxito');
    }
}
