<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RolController extends Controller
{   

    function __construct()
    {
        //$this->middleware('permission:ver-rol | crear-rol | editar-rol | borrar-rol', ['only'=>['index']]);
        //$this->middleware('permission:crear-rol', ['only'=>['create', 'store']]);
        //$this->middleware('permission:editar-rol', ['only'=>['edit', 'update']]);
        //$this->middleware('permission:borrar-rol', ['only'=>['destroy']]);
    }

    public function index()
    {
        $roles=Role::all();
        return view('roles.index', ['roles'=>$roles]);
    }


    public function create()
    {
        $permission= Permission::all()->pluck(value:'name', key:'id');
        return view('roles.create', compact('permission'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['name'=>'required', 'permission'=>'required']);

        $role = Role::create($request->only('name'));
        $role->syncPermissions($request->input('permission', []));
        return redirect()->route('roles.index');
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $role ->load('permissions');
        $permission=Permission::all()->pluck(value:'name', key:'id');
        return view('roles.edit', compact('role', 'permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $this->validate($request, ['name'=>'required', 'permission'=>'required']);

        $role->update($request->only('name'));
        $role->Permissions()->sync($request->input('permission', []));
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role=Role::find($id);
        DB::table('roles')->where('id', $id)->delete();
        return redirect()->route('roles.index');
    }
}
