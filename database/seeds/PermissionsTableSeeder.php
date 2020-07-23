<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'              => 'Navegar Estudiantes',
            'slug'              => 'student.index',
            'description'       => 'Ver lista de Estudiantes',
        ]);
        Permission::create([
            'name'              => 'Registrar Estudiante',
            'slug'              => 'student.create',
            'description'       => 'Registra expediente de Estudiante',
        ]);
        Permission::create([
            'name'              => 'Eliminar Estudiante',
            'slug'              => 'student.destroy',
            'description'       => 'Elimina expediente de Estudiante',
        ]);
        Permission::create([
            'name'              => 'Ver Estudiante',
            'slug'              => 'student.show',
            'description'       => 'Ver expediente de Estudiante',
        ]);
        Permission::create([
            'name'              => 'Editar Estudiante',
            'slug'              => 'student.edit',
            'description'       => 'Editar datos del Estudiante',
        ]);
    }
}
