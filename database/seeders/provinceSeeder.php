<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\province;

class provinceSeeder extends Seeder{
    public function run(){
        province::create(['name' => 'NANGGROE ACEH DARUSSALAM']);
        province::create(['name' => 'SUMATERA UTARA']);
        province::create(['name' => 'SUMATERA BARAT']);
        province::create(['name' => 'RIAU']);
        province::create(['name' => 'JAMBI']);
        province::create(['name' => 'SUMATERA SELATAN']);
        province::create(['name' => 'BENGKULU']);
        province::create(['name' => 'LAMPUNG']);
        province::create(['name' => 'BANGKA BELITUNG']);
        province::create(['name' => 'KEPULAUAN RIAU']);
        province::create(['name' => 'DKI JAKARTA']);
        province::create(['name' => 'JAWA BARAT']);
        province::create(['name' => 'JAWA TENGAH']);
        province::create(['name' => 'BANTEN']);
        province::create(['name' => 'JAWA TIMUR']);
        province::create(['name' => 'DI YOGYAKARTA']);
        province::create(['name' => 'BALI']);
        province::create(['name' => 'NUSA TENGGARA BARAT']);
        province::create(['name' => 'NUSA TENGGARA TIMUR']);
        province::create(['name' => 'KALIMANTAN BARAT']);
        province::create(['name' => 'KALIMANTAN TENGAH']);
        province::create(['name' => 'KALIMANTAN SELATAN']);
        province::create(['name' => 'KALIMANTAN TIMUR']);
        province::create(['name' => 'KALIMANTAN UTARA']);
        province::create(['name' => 'SULAWESI UTARA']);
        province::create(['name' => 'SULAWESI TENGAH']);
        province::create(['name' => 'SULAWESI SELATAN']);
        province::create(['name' => 'SULAWESI TENGGARA']);
        province::create(['name' => 'GORONTALO']);
        province::create(['name' => 'SULAWESI BARAT']);
        province::create(['name' => 'MALUKU']);
        province::create(['name' => 'MALUKU UTARA']);
        province::create(['name' => 'PAPUA']);
        province::create(['name' => 'PAPUA BARAT']);
    }
}
