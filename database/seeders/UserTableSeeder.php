<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminrole = Role::where('name', 'admin')->first();
        $authorrole = Role::where('name', 'author')->first();
        $userrole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $author = User::create([
            'name' => 'Author User',
            'email' => 'author@author.com',
            'password' => Hash::make('password')
        ]);

        $user = User::create([
            'name' => 'User User',
            'email' => 'User@User.com',
            'password' => Hash::make('password')
        ]);

        $admin->roles()->attach($adminrole);
        $author->roles()->attach($authorrole);
        $user->roles()->attach($userrole);
    }
}
