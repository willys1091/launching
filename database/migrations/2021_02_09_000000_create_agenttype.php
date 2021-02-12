<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenttype extends Migration{
    public function up(){
        Schema::create('agenttype', function (Blueprint $table) {
            $table->id();
            $table->string('desctiption');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('agenttype');
    }
}
