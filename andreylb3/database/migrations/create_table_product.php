<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('TProducts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->int('type');
            $table->int('supplier');
            $table->int('warehouse');
            $table->int('client');
            $table->int('order');
        });
    }

    public function down()
    {
        Schema::dropIfExists('TProducts');
    }
}