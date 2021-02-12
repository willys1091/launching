<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeagent extends Migration{
    public function up(){
        Schema::create('officeagent', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('officeagenttype_id');
            $table->unsignedInteger('lead_id');
            $table->string('name');
            $table->text('address');
            $table->string('website');
            $table->string('phone');
            $table->string('fax');
            $table->string('mobilephone');
            $table->string('taxid');
            $table->string('taxname');
            $table->text('taxaddress');
            $table->unsignedInteger('bank_id');
            $table->string('bankname');
            $table->string('bankbranch');
            $table->string('account');
            $table->string('accountname')->nullable();
            $table->string('accountnumber')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('officeagent');
    }
}
