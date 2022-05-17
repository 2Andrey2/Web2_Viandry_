<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousesTable extends Migration
{
    public function up()
    {
        Schema::create('TWarehouses', function (Blueprint $table) {
            $table->id();
            $table->int('number');
            $table->string('addressname');
            $table->string('telephone');
        });
    }

    public function down()
    {
        Schema::dropIfExists('TWarehouses');
    }
}