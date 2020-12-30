<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'abderrahim',
                    'prenom' => 'kbib',
                    'age' => 24,
                    'src' => 'cactus.jpg',
                    'role' => 'admin',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('admin@admin.com')
                ],
                [
                    'name' => 'abderrahim',
                    'prenom' => 'kbib',
                    'age' => 24,
                    'src' => 'dfazdazdazdazd',
                    'role' => 'membre',
                    'email' => 'user@user.com',
                    'password' => Hash::make('user@user.com')
                ]
            ]
        );
    }
}
