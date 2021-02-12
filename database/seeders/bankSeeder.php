<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\bank;

class bankSeeder extends Seeder{
    public function run(){
        bank::create(['name' => 'BRI','companyname' => 'PT BANK RAKYAT INDONESIA (PERSERO) Tbk','code' => '002']);
        bank::create(['name' => 'Mandiri','companyname' => 'PT BANK MANDIRI (PERSERO) Tbk','code' => '008']);
        bank::create(['name' => 'BNI','companyname' => 'PT BANK NEGARA INDONESIA (PERSERO) Tbk','code' => '009']);
        bank::create(['name' => 'BTN','companyname' => 'PT BANK TABUNGAN NEGARA (PERSERO) Tbk','code' => '200']);
        bank::create(['name' => 'Danamon','companyname' => 'PT BANK DANAMON INDONESIA Tbk','code' => '011']);
        bank::create(['name' => 'Permata','companyname' => 'PT BANK PERMATA Tbk','code' => '013']);
        bank::create(['name' => 'BCA','companyname' => 'PT BANK CENTRAL ASIA Tbk','code' => '014']);
        bank::create(['name' => 'Maybank','companyname' => 'PT BANK MAYBANK  INDONESIA Tbk','code' => '016']);
        bank::create(['name' => 'Panin','companyname' => 'PT PAN INDONESIA BANK Tbk','code' => '019']);
        bank::create(['name' => 'CIMB Niaga','companyname' => 'PT BANK CIMB NIAGA Tbk','code' => '022']);
        bank::create(['name' => 'UOB','companyname' => 'PT BANK UOB INDONESIA','code' => '023']);
        bank::create(['name' => 'OCBC NISP','companyname' => 'PT BANK OCBC NISP Tbk','code' => '028']);
        bank::create(['name' => 'Artha Graha','companyname' => 'PT BANK ARTHA GRAHA INTERNASIONAL Tbk','code' => '037']);
        bank::create(['name' => 'Bumi Arta','companyname' => 'PT BANK BUMI ARTA Tbk','code' => '076']);
        bank::create(['name' => 'HSBC','companyname' => 'PT BANK HSBC INDONESIA','code' => '087']);
        bank::create(['name' => 'JTrust ','companyname' => 'PT BANK JTRUST INDONESIA Tbk','code' => '095']);
        bank::create(['name' => 'Mayapada','companyname' => 'PT BANK MAYAPADA INTERNATIONAL Tbk','code' => '097']);
        bank::create(['name' => 'Mega','companyname' => 'PT BANK MEGA Tbk','code' => '426']);
        bank::create(['name' => 'MNC','companyname' => 'PT BANK MNC INTERNASIONAL Tbk','code' => '485']);
    }
}
