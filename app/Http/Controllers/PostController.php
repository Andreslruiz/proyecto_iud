<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Http\Requests\StorePost;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.post.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('dashboard.post.create', ['post' => new Post()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        Post::create($request->validated());
        return back()->with('status', 'Publicación creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        return view('dashboard.post.show', ["post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        return view('dashboard.post.edit', ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePost $request, post $post)
    {
        $post->update($request->validated());
        return back()->with('status', 'Publicación editada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        $post->delete();
        return back()->with('status', 'Publicación eliminada con éxito');
    }
}
