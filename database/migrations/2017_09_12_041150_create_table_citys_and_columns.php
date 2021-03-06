<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCitysAndColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('citys', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          
          $table->integer('country_id')->unsigned();
          $table->foreign('country_id')->references('id')->on('countrys')->onDelete('cascade');

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
      Schema::drop('citys');
    }
}
