<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentplan extends Migration{
    public function up(){
        Schema::create('paymentplan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('selling_price_flag');
            $table->char('booking_fee_flag');
            $table->char('installment_fee_flag');
            $table->string('installment_period');
            $table->char('dp_flag');
            $table->double('dp_percent');
            $table->double('dp_period');
            $table->char('kpa_flag');
            $table->double('kpa_percent');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('paymentplan');
    }
}
