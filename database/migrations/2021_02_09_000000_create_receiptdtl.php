<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptdtl extends Migration{
    public function up(){
        Schema::create('receiptdtl', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('receipthdr_id');
            $table->unsignedInteger('unit_id');
            $table->double('nupfee');
            $table->double('bookingfee');
            $table->double('outstanding');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('receiptdtl');
    }
}
