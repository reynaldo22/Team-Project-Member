<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create([
            'name' => 'Admin'
        ]);

        $roleUser = Role::create([
            'name' => 'User'
        ]);

        $userAdmin = User::create ([
            'name' => 'Admin',
            'email' => 'admin@bncc.net',
            'password' => bcrypt('admin'),
        ]);

        $userAdmin->roles()->attach($roleAdmin->id);
        // $this->call(UsersTableSeeder::class);
    }
}
