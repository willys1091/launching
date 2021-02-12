<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricelist extends Migration{
    public function up(){
        Schema::create('pricelist', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('event_id');
            $table->unsignedInteger('paymentplan_id');
            $table->unsignedInteger('unit_id');
            $table->unsignedInteger('propertytype_id');
            $table->double('sellingprice')->nullable();
            $table->double('bookingfee')->nullable();
            $table->double('dp_amount')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('pricelist');
    }
}
