<?php

use Illuminate\Database\Seeder;

class LuotChoiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('luotchoi')->insert([
            'nguoi_choi_id'=>'1',
            'so_cau'=>'5',
            'diem'=>'2',
            
        ]);
    }
}
