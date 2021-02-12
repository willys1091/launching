<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfig extends Migration{
    public function up(){
        Schema::create('config', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('value');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('config');
    }
}
