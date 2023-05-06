<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'      => 'Admin',
            'username'  => 'admin',
            'email'     => 'admin@kitapintar.com',
            'password'  => bcrypt('password'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->create([
            'name'      => 'Apriliaosa Fani',
            'username'  => 'appri',
            'email'     => 'john@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->create([
            'name'      => 'Vikha Handayani',
            'username'  => 'vika',
            'email'     => 'vika@kitapintar.com',
            'password'  => bcrypt('password'),
            'type'      => User::MODERATOR,
        ]);

        User::factory()->create([
            'name'      => 'Prida Angelina',
            'username'  => 'Prida',
            'email'     => 'prida@kitapintar.com',
            'password'  => bcrypt('password'),
            'type'      => User::MODERATOR,
        ]);

        User::factory()->create([
            'name'      => 'Restu Yulia',
            'username'  => 'r33',
            'email'     => 'restu@kitapintar.com',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
        ]);

        User::factory()->create([
            'name'      => 'Suci MandasarI',
            'username'  => 'SCC',
            'email'     => 'suci@kitapintar.com',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
        ]);


        User::factory()->count(10)->create();
    }
}
