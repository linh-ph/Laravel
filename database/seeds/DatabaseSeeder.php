<?php

use App\GoiCredit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(GoiCreditSeed::class);
         //$this->call(LuotChoiSeed::class);
         //$this->call(MuaCreditSeed::class);
         //$this->call(NguoiChoiSeed::class);
         //$this->call(ChiTietLuotChoiSeed::class);
         $this->call(QuanTriVienSeed::class);
         //$this->call(CauHinhCauHoiSeed::class);
        //  $this->call(CauHinhTroGiupSeed::class);
        //  @$this->call(CauHinhAppSeed::class);
    }
}
