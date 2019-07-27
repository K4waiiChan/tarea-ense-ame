<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Caffeinated\Shinobi\Models\Role;

class Administrator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
            'name' => 'administrador',
            'slug' => 'administrador',
            'special' => 'all-access'
        ]);

        $user = User::create([
            'name' => 'Administrator',
            'lastname' => 'user',
            'email' => 'admin@admin.com',
            'password' => bcrypt('superadmin'),
            'ci' => '20002000',
            'username' => 'admin'
        ]);

        $user->assignRole($role->id);
    }
}