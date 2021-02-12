<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptdtl2 extends Migration{
    public function up(){
        Schema::create('receiptdtl2', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('receipthdr_id');
            $table->string('method');
            $table->double('amount');
            $table->string('ref')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('receiptdtl2');
    }
}
