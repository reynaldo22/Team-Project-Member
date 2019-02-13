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
            'username' => 'Admin',
            'password' => bcrypt('admin'),
            'sekolah' => '-',
            'name' => 'Admin',
            'email' => 'admin@bncc.net',
            'ktp' => '-',
            'name1' => '-',
            'email1' => '-',
            'ktp1' => '-',
            'name2' => '-',
            'email2' => '-',
            'ktp2' => '-',
        ]);

        $userAdmin->roles()->attach($roleAdmin->id);
        // $this->call(UsersTableSeeder::class);
    }
}
