<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicePayTable extends Migration
{ /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_pay', function (Blueprint $table) {
            //
            $table->increments('invoice_pay_id');
            $table->timestamps();
            $table->integer('invoice_id');
            $table->integer('PType_id');
            $table->date('date_id');
          
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('invoice_pay');

}
}
