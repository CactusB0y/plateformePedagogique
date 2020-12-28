<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matieres')->insert(
            [
                [
                    'nom' => 'HTML',
                ],
                [
                    'nom' => 'CSS',
                ],
                [
                    'nom' => 'JS',
                ],
                [
                    'nom' => 'REACT JS',
                ],
                [
                    'nom' => 'MYSQL',
                ],
                [
                    'nom' => 'LARAVEL',
                ],
            ]
        );
    }
}
