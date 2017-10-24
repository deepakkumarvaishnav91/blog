<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
           $table->increments('id');
		   $table->BigInteger('empid');
		   $table->char('firstname',20);
		   $table->char('middlename',20);
		   $table->char('lastname',20);
		   $table->bigInteger('phoneno');
		   $table->string ('emailid');
           $table->bigInteger('supervisorid');
		   $table->bigInteger('designationid');
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
        Schema::drop("items");
    }
}
