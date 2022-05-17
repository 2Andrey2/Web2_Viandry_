<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('TClients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('addressname');
            $table->string('telephone');
        });
    }

    public function down()
    {
        Schema::dropIfExists('TClients');
    }
}