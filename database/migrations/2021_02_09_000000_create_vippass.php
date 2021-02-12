<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVippass extends Migration{
    public function up(){
        Schema::create('vippass', function (Blueprint $table) {
            $table->id();
            $table->string('vippass')->index();
            $table->string('vipcategory_code')->index();
            $table->unsignedInteger('event_id')->index();
            $table->unsignedInteger('vipcategory_id')->index();
            $table->unsignedInteger('customer_id')->index();
            $table->unsignedInteger('agent_id');
            $table->unsignedInteger('officeagent_id');
            $table->unsignedInteger('leadagent_id');
            $table->integer('nupfee');
            $table->string('paymentmethod');
            $table->string('account_no');
            $table->string('card_no');
            $table->string('card_name');
            $table->datetime('settlement_date');
            $table->string('media');
            $table->unsignedInteger('paymentplan_id');
            $table->string('unit');
            $table->text('remaks');
            $table->string('approved');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('vippass');
    }
}
