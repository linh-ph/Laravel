<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CauHinhAppSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cauhinhapp')->insert([
            'co_hoi_sai'=>'4',
            'thoi_gian_tra_loi'=>'60',
        ]);
    }
}
