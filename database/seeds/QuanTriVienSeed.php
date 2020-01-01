<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class QuanTriVienSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quan_tri_vien')->insert([
            'ten_dang_nhap'=>'linhphan',
            'mat_khau'=>Hash::make('123'),
            'ho_ten'=>'Nguyen Phan Linh',
        ]);
    }
}
