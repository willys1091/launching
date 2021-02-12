<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgent extends Migration{
    public function up(){
        Schema::create('agent', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('officeagent_id')->nullable();;
            $table->string('member_number')->nullable();;
            $table->string('agenttype_id')->nullable();;
            $table->string('mobilephone');
            $table->string('password_recovery_token')->nullable();;
            $table->dateTime('password_recovery_expired')->nullable();;
            $table->dateTime('joindate');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('photo')->nullable();;
            $table->string('companyname');
            $table->text('companyaddress');
            $table->string('companywebsite')->nullable();;
            $table->string('companyphone')->nullable();;
            $table->string('fax')->nullable();;
            $table->string('taxid');
            $table->string('taxidfile')->nullable();;
            $table->string('idcard');
            $table->string('idcardfile')->nullable();;
            $table->unsignedInteger('bank_id');
            $table->string('bankname');
            $table->string('bankbranch');
            $table->string('bankaccname');
            $table->string('bankaccno');
            $table->integer('performance')->default(0);
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('agent');
    }
}
