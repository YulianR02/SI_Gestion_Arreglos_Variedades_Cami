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


        Permission::create(['name' => 'homes'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'categories.index'])->assignRole($role1);
        Permission::create(['name' => 'categories.create'])->assignRole($role1);
        Permission::create(['name' => 'categories.edit'])->assignRole($role1);
        Permission::create(['name' => 'categories.destroy'])->assignRole($role1);
        Permission::create(['name' => 'categories.module'])->assignRole($role1);

        Permission::create(['name' => 'subcategories.index'])->assignRole($role1);
        Permission::create(['name' => 'subcategories.create'])->assignRole($role1);
        Permission::create(['name' => 'subcategories.edit'])->assignRole($role1);
        Permission::create(['name' => 'subcategories.destroy'])->assignRole($role1);

        Permission::create(['name' => 'arreglos.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'arreglos.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'arreglos.edit'])->assignRole($role1);;
        Permission::create(['name' => 'arreglos.destroy'])->assignRole($role1);;

        Permission::create(['name' => 'products.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'products.create'])->assignRole($role1);;
        Permission::create(['name' => 'products.edit'])->assignRole($role1);;
        Permission::create(['name' => 'products.destroy'])->assignRole($role1);;

        Permission::create(['name' => 'users.index'])->assignRole($role1);;
        Permission::create(['name' => 'users.create'])->assignRole($role1);;
        Permission::create(['name' => 'users.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.destroy'])->assignRole($role1);;
    }
}
