<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role1 = Role::create(['name'=>'Administrador']);
        $role2 = Role::create(['name'=>'Cliente']);


        Permission::create(['name' => 'homes',
                            'description' => 'Ver Dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'categories.index',
                            'description' => 'Ver listado de categorias'])->assignRole($role1);
        Permission::create(['name' => 'categories.create',
                            'description' => 'Crear categorias'])->assignRole($role1);
        Permission::create(['name' => 'categories.edit',
                            'description' => 'Editar categorias'])->assignRole($role1);
        Permission::create(['name' => 'categories.destroy',
                            'description' => 'Eliminar categorias'])->assignRole($role1);
        Permission::create(['name' => 'categories.module',
                            'description' => 'Filtrar categorias'])->assignRole($role1);


        Permission::create(['name' => 'subcategories.index',
                            'description' => 'Ver lista de subcategorias'])->assignRole($role1);
        Permission::create(['name' => 'subcategories.create',
                            'description' => 'Crear subcategorias'])->assignRole($role1);
        Permission::create(['name' => 'subcategories.edit',
                            'description' => 'Editar subcategorias'])->assignRole($role1);
        Permission::create(['name' => 'subcategories.destroy',
                            'description' => 'Eliminar subcategorias'])->assignRole($role1);


        Permission::create(['name' => 'arreglos.index',
                            'description' => 'Ver listado de arreglos'])->assignRole($role1);
        Permission::create(['name' => 'arreglos.create',
                            'description' => 'Crear arreglos'])->assignRole($role1);
        Permission::create(['name' => 'arreglos.edit',
                            'description' => 'Editar arreglos'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'arreglos.destroy',
                            'description' => 'Eliminar arreglos'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'misarreglos.index',
                            'description' => 'Ver Mis arreglos'])->syncRoles([$role1, $role2]);;


        Permission::create(['name' => 'apartados.index',
                            'description' => 'Ver listado de apartados'])->assignRole($role1);;
        Permission::create(['name' => 'apartados.create',
                            'description' => 'Crear apartados'])->assignRole($role1);
        Permission::create(['name' => 'apartados.edit',
                            'description' => 'Editar apartados'])->assignRole($role1);;
        Permission::create(['name' => 'apartados.destroy',
                            'description' => 'Eliminar apartados'])->assignRole($role1);;
        Permission::create(['name' => 'misapartados.index',
                            'description' => 'Ver mis apartados'])->syncRoles([$role1, $role2]);;

        Permission::create(['name' => 'products.index',
                            'description' => 'Ver listado de productos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'products.create',
                            'description' => 'Crear productos'])->assignRole($role1);;
        Permission::create(['name' => 'products.edit',
                            'description' => 'Editar productos'])->assignRole($role1);;
        Permission::create(['name' => 'products.destroy',
                            'description' => 'Eliminar productos'])->assignRole($role1);;

        Permission::create(['name' => 'users.index',
                            'description' => 'Ver listado de usuarios'])->assignRole($role1);;
        Permission::create(['name' => 'users.create',
                            'description' => 'Crear usuarios'])->assignRole($role1);;
        Permission::create(['name' => 'users.edit',
                            'description' => 'Editar usuarios'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.profile',
                            'description' => 'Ver perfil'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.destroy',
                            'description' => 'Eliminar usuarios'])->assignRole($role1);;

        Permission::create(['name' => 'roles.index',
                            'description' => 'Ver roles'])->assignRole($role1);;
        Permission::create(['name' => 'roles.create',
                            'description' => 'Crear rol'])->assignRole($role1);;
        Permission::create(['name' => 'roles.edit',
                            'description' => 'Editar rol'])->assignRole($role1);;
        Permission::create(['name' => 'roles.destroy',
                            'description' => 'Eliminar rol'])->assignRole($role1);;

    }
}
