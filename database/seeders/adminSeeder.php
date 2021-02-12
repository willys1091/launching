<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\admin;

class adminSeeder extends Seeder{
    public function run(){
        admin::create(['email' => 'willys@launching.com','name'=>'admin', 'password' => sha1('1'),'type'=>'admin', ]);
    }
}
