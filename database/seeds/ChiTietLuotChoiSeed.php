<?php

use Illuminate\Database\Seeder;

class ChiTietLuotChoiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chitietluotchoi')->insert([
            'luot_choi_id'=>'1',
            'cau_hoi_id'=>'2001',
            'phuong_an'=>'A',
            'diem'=>'1'
        ]);
    }
}
