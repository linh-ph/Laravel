<?php

use Illuminate\Database\Seeder;

class MuaCreditSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lichsumuacredit')->insert([
            'nguoi_choi_id'=>'1',
            'goi_credit_id'=>'1',
            'credit'=>'500',
            'so_tien'=>'50',
        ]);
    }
}
