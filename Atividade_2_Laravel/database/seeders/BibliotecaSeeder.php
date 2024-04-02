<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biblioteca')->insert([
            'Title' => 'Diario de um banana',
            'AuthorPublisher' => 'Marta Souza',
            'PublicationDate' => '2020-05-09',
            'GenreType' => 'Hitorias infenatis' => 1,
        ]);
    }
}
