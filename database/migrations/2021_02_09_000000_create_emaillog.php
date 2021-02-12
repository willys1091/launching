<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmaillog extends Migration{
    public function up()
    {
        Schema::create('emaillog', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('to');
            $table->string('subject');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('emaillog');
    }
}
