<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchRequesttable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_request', function (Blueprint $table) {
            //
            $table->increments('search_request_lease_length_id');
            $table->timestamps();
            $table->string('lease_length');
            
            $table->string('price_range');
            $table->text('area');
            $table->integer('bedrooms');
            $table->integer('baths');


          
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('search_request');

}
}

