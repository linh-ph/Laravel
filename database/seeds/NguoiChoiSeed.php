<?php

use Illuminate\Database\Seeder;

class NguoiChoiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('nguoi_chois')->insert([
           'ten_dang_nhap'=>'phat',
           'mat_khau'=>'123',
           'email'=>'phat@gmail.com',
           'hinh_dai_dien'=>'phat.jpg',
           'diem_cao_nhat'=>'200',
           'credit'=>'0'
       ]);
    }
}
