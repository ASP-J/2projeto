<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@email.com',
            'password'  => \Hash::make('12345678'),
            'is_admin' => true,
        ]);

        User::create([
            'name'      => 'client',
            'email'     => 'client@email.com',
            'password'  => \Hash::make('12345678'),
            'is_admin' => false,
        ]);
    }
}
