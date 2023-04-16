<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos=[
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            'ver-category',
            'crear-category',
            'editar-category',
            'borrar-category',
            'ver-post',
            'crear-post',
            'editar-post',
            'borrar-post',
        ];

        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
