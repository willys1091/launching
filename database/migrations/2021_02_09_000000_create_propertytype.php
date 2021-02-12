<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertytype extends Migration{
    public function up()
    {
        Schema::create('propertytype', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('propertytype');
    }
}
