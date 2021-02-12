<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceipthdr extends Migration{
    public function up(){
        Schema::create('receipthdr', function (Blueprint $table) {
            $table->id();
            $table->string('receiptno');
            $table->datetime('receiptdate');
            $table->unsignedInteger('customer_id');
            $table->string('status')->default('create');
            $table->text('cancel_reason')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('receipthdr');
    }
}
