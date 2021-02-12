<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomer extends Migration{
    public function up(){
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name');
            $table->string('gender');
            $table->date('birthdate');
            $table->string('type');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->unsignedInteger('address_state_id')->nullable();
            $table->string('idcardaddress1');
            $table->string('idcardaddress2')->nullable();
            $table->string('idcardaddress3')->nullable();
            $table->unsignedInteger('idcard_state_id')->nullable();
            $table->string('workphone')->nullable();
            $table->string('fax')->nullable();
            $table->string('mobilephone');
            $table->string('email');
            $table->string('job')->nullable();
            $table->string('idcard');
            $table->string('idcard_file')->nullable();
            $table->string('taxname');
            $table->string('taxid');
            $table->string('taxaddress');
            $table->string('taxid_file')->nullable();
            $table->unsignedInteger('bank_id')->nullable();
            $table->string('bankbranch')->nullable();
            $table->string('accountname')->nullable();
            $table->string('accountnumber')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('customer');
    }
}
