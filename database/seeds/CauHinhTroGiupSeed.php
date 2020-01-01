<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CauHinhTroGiupSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cauhinhtrogiup')->insert([
            'loai_tro_giup'=>'1',
            'thu_tu'=>'1',
            'credit'=>'200',
        ]);
    }
}
