<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemlog extends Migration{
    public function up(){
        Schema::create('systemlog', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('admin_id');
            $table->string('ipaddress');
            $table->text('description');
            $table->timestamp('timestamp');
        });
    }

    public function down(){
        Schema::dropIfExists('systemlog');
    }
}
