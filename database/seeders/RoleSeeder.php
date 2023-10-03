<?php

namespace Database\Seeders;

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
        $role1 = Role::create(['name'=> 'Administrador']);
        $role2 = Role::create(['name'=> 'Logistica']);
        $role3 = Role::create(['name'=> 'Produccion']);

        Permission::create(['name'=> 'dashboard'])->syncRoles([$role1 ,$role2, $role3]);
        Permission::create(['name'=> 'articles'])->syncRoles([$role1 ,$role2]); //catalogo
        Permission::create(['name'=> 'request.add'])->syncRoles([$role1 ,$role3]); //agregar articulo
        Permission::create(['name'=> 'request.update'])->assignRole([$role1]); //agregar articulo
        Permission::create(['name'=> 'inventory'])->syncRoles([$role1 ,$role2, $role3]); //articulo
        Permission::create(['name'=> 'inventory.add'])->syncRoles([$role1 ,$role2]); //agregar articulo
        Permission::create(['name'=> 'muestras'])->syncRoles([$role1 ,$role3]);     
        Permission::create(['name'=> 'reports'])->syncRoles([$role1 ,$role2, $role3]);
        Permission::create(['name'=> 'users'])->assignRole($role1);
    }
}
