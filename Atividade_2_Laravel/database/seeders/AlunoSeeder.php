<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeders
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aluno')->insert([
            'Name' => 'Pedro',
            'DateOfBirth' => '2012-06-08',
            'Email' => 'Pedro@gmail.com',
            'RegistrationNumber' => '990099',
            'ClassCourse' => 'Engenharia'
        ]);
    }
}
