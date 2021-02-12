<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVipname extends Migration{
   
    public function up(){
        Schema::create('vipname', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('event_id');
            $table->integer('max');
            $table->integer('lastno');
            $table->string('order');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('vipname');
    }
}
