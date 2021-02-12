<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoles extends Migration{
    public function up(){
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('name');
            $table->text('perms');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('roles');
    }
}
