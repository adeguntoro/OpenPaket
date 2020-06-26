<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

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
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // create roles and assign created permissions

        // this can be done as separate statements
        Role::create(['name' => 'Master']);
        Role::create(['name' => 'Staff']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'User']);

        # users
        User::create([
            'name' => 'Master',
            'email' => 'master@mail.com',
            'password'  => Hash::make('1234'),
            'uuid' => bin2hex(random_bytes(5)),
            'status' => '1'
        ])->assignRole('Master');

        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password'  => Hash::make('1234'),
            'uuid' => bin2hex(random_bytes(5)),
            'status' => '1'
        ])->assignRole('Admin');

        User::create([
            'name' => 'Staff',
            'email' => 'staff@mail.com',
            'password'  => Hash::make('1234'),
            'uuid' => bin2hex(random_bytes(5)),
            'status' => '1'
        ])->assignRole('Staff');

        User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'password'  => Hash::make('1234'),
            'uuid' => bin2hex(random_bytes(5)),
            'status' => '1'
        ])->assignRole('User');

    }
}
