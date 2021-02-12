<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\agenttype;

class agenttypeSeeder extends Seeder{
    public function run(){
        agenttype::create(['desctiption' => 'sales inhouse']);
        agenttype::create(['desctiption' => 'member']);
        agenttype::create(['desctiption' => 'lead agent']);
        agenttype::create(['desctiption' => 'Agent']);
        agenttype::create(['desctiption' => 'employee']);
        agenttype::create(['desctiption' => 'BGB']);
    }
}
