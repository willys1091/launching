<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmin extends Migration{
    public function up(){
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->unsignedInteger('role_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('title')->nullable();
            $table->string('password');
            $table->string('token')->nullable();
            $table->string('resetlink')->nullable();
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('admin');
    }
}
