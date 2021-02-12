<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBank extends Migration{
    public function up(){
        Schema::create('bank', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('companyname');
            $table->string('code');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('bank');
    }
}
