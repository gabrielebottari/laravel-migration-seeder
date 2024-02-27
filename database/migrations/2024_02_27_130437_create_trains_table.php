<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code');
            $table->integer('carriages_number');
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trains');
    }
};