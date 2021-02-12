<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerlock extends Migration{
    public function up(){
        Schema::create('customerlock', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('admin_id');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('customerlock');
    }
}
