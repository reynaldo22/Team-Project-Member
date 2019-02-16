<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soals')->insert([
            'id_soal' => 2,
            'path' => 'card.pdf',
        ]);
    }
}
