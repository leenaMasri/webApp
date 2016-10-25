<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomRateTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_rate', function (Blueprint $table) {
            //
            $table->increments('room_rate_id');
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('room_no');
            $table->integer('R_id');
            $table->boolean('active');
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
        Schema::drop('room_rate');

}
}
