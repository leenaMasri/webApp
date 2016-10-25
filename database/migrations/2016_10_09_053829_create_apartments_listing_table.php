<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsListingTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments_listing', function (Blueprint $table) {
            //
            $table->increments('apartments_listing_id');
            $table->string('lease_length');
            $table->text('description');
            $table->string('owner_name');
            $table->string('apartment');
            $table->string('rent');
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
        Schema::drop('apartments_listing');

}
}

