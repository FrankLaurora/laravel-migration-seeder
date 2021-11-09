<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->char('destination', 50);
            $table->char('destination_nation', 50);
            $table->unsignedDecimal('price', 6, 2);
            $table->dateTime('departure_day');
            // $table->time('departure_time', 0);
            $table->dateTime('return_day');
            // $table->time('return_time', 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
