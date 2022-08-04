<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@pamdes.id',
            'password' => bcrypt('admin'),
            'role' => 'administrator'
        ]);
        $admin->assignRole('admin');

    }
}
