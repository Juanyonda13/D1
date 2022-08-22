<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        $admin =Role::create(['name'=>'admin']);
        $user=Role::create(['name'=>'user']);

        $crearDatabase=Permission::create(['name'=>'create.dataBase'])->syncRoles([$admin]);
        $crearDatabase=Permission::create(['name'=>'store.dataBase'])->syncRoles([$admin]);
        $crearDatabase=Permission::create(['name'=>'edit.dataBase'])->syncRoles([$admin]);
        $crearDatabase=Permission::create(['name'=>'update.dataBase'])->syncRoles([$admin]);
        $crearDatabase=Permission::create(['name'=>'delete.dataBase'])->syncRoles([$admin]);

        $crearTablas=Permission::create(['name'=>'create.table'])->syncRoles([$admin]);
        $crearTablas=Permission::create(['name'=>'store.table'])->syncRoles([$admin]);
        $crearTablas=Permission::create(['name'=>'edit.table'])->syncRoles([$admin]);
        $crearTablas=Permission::create(['name'=>'update.table'])->syncRoles([$admin]);
        $crearTablas=Permission::create(['name'=>'delete.table'])->syncRoles([$admin]);




        $verTablas=Permission::create(['name'=>'index.table'])->syncRoles([$user,$admin]);
    }
}
