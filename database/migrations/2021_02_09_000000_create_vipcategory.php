<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVipcategory extends Migration{
    public function up(){
        Schema::create('vipcategory', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('event_id');
            $table->boolean('refundable');
            $table->string('qty');
            $table->integer('nupfee');
            $table->integer('lastno');
            $table->string('descs')->nullable();
            $table->string('color');
            $table->boolean('active')->default('1');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('vipcategory');
    }
}
