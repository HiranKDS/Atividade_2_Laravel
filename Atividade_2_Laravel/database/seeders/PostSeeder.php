<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post')->insert([
            'PostTitle' => 'Laravel',
            'Author' => 'João Lucas',
            'PublicationDate' => '2021-11-24',
            'Content' => 'Ensino sobre Laravel e suas vantagens',
            'Tags' => 'laravel, framework',
        ]);
    }
}
