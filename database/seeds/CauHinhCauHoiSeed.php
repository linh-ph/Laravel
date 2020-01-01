<?php

use Illuminate\Database\Seeder;

class CauHinhCauHoiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cauhinhdiemcauhoi')->insert([
            'thu_tu'=>'1',
            'diem'=>'20',
        ]);
    }
}
