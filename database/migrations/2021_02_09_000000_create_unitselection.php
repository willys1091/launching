<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitselection extends Migration{
    public function up(){
        Schema::create('unitselection', function (Blueprint $table) {
            $table->id();
            $table->datetime('bookingdate');
            $table->unsignedInteger('event_id');
            $table->unsignedInteger('vippass_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('unit_id');
            $table->unsignedInteger('paymentplan_id');
            $table->integer('sellingprice');
            $table->string('contactno')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('unitselection');
    }
}
