<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVipregister extends Migration{
    public function up(){
        Schema::create('vipregister', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('event_id')->index();
            $table->unsignedInteger('vippass_id');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('vipregister');
    }
}
