<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();
        
        $user = new User();
        $user->name = 'Administrador';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('administrador');
        $user->save();
        $user->roles()->attach($role_admin);

    }
}
