<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent', function (Blueprint $table) {
            //
            $table->increments('rent_id');
            $table->timestamps();
            $table->integer('room_type_id');
            $table->date('from_date');
            $table->date('to_date');
            $table->double('amount');
            $table->boolean('is_active');
           
          
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rent');

}
}