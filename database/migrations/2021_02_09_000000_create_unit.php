<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnit extends Migration{
    public function up(){
        Schema::create('unit', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('propertytype_id')->index();
            $table->string('floor')->nullable()->index();
            $table->string('unitno')->index();
            $table->string('unittype')->comment('studio,1BR,2BR,ETC')->nullable();
            $table->string('unitview')->nullable();
            $table->string('unitsize')->nullable();
            $table->string('landsize')->nullable();
            $table->string('va_no')->nullable();
            $table->string('va_name')->nullable();
            $table->unsignedInteger('va_bank_id');
            $table->string('va_account_name');
            $table->string('x');
            $table->string('y');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('unit');
    }
}
