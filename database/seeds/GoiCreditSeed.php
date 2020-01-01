<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class GoiCreditSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goicredit')->insert([
            
            'ten_goi'=>'230R',
            'credit'=>'230',
            'so_tien'=>'200',
            
        ]);
    }
}
    