<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyaccount extends Migration{
    public function up(){
        Schema::create('companyaccount', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('bank_id');
            $table->string('accountname');
            $table->string('accountnumber');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('companyaccount');
    }
}
