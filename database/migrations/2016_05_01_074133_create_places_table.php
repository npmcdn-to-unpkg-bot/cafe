<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->float('space_point')->unsigned();
            $table->float('service_point')->unsigned();
            $table->float('quality_point')->unsigned();
            $table->float('address_point')->unsigned();
            $table->float('price_point')->unsigned();
            $table->string('address');
            $table->string('phone_number');
            $table->string('open_time');
            $table->string('close_time');
            $table->decimal('start_price')->unsigned();
            $table->decimal('end_price')->unsigned();
            $table->double('latitude', 9, 5);
            $table->double('longitude', 9, 5);
            $table->longText('character');
            $table->longText('review');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('places');
    }
}
