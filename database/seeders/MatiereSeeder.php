<?php

namespace Database\Seeders;

use Hamcrest\Description;
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
                    'description' => 'HTML5 (HyperText Markup Language 5) est la dernière révision majeure du HTML (format de données conçu pour représenter les pages web). Cette version a été finalisée le 28 octobre 2014.'
                ],
                [
                    'nom' => 'CSS',
                    'description' => "Les feuilles de style en cascade1, généralement appelées CSS de l'anglais Cascading Style Sheets, forment un langage informatique qui décrit la présentation des documents HTML et XML."
                ],
                [
                    'nom' => 'JS',
                    'description' => "JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web."
                ],
                [
                    'nom' => 'REACT JS',
                    'description' => "React (aussi appelé React.js ou ReactJS) est une bibliothèque JavaScript libre développée par Facebook depuis 2013."
                ],
                [
                    'nom' => 'MYSQL',
                    'description' => "MySQL (prononcer [maj.ɛs.ky.ɛl]) est un système de gestion de bases de données relationnelles (SGBDR)."
                ],
                [
                    'nom' => 'LARAVEL',
                    'description' => "Laravel est un framework web open-source écrit en PHP1 respectant le principe modèle-vue-contrôleur et entièrement développé en programmation orientée objet."
                ],
            ]
        );
    }
}
