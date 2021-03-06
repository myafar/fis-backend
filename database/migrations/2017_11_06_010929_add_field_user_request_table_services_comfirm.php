<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldUserRequestTableServicesComfirm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services_confirms', function (Blueprint $table) {
          $table->dropForeign(['status_id']);
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('status_id')->references('id')->on('services_statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services_confirms', function (Blueprint $table) {
              $table->dropForeign(['user_id']);
              $table->dropColumn('user_id');
              $table->dropForeign(['status_id']);
              $table->foreign('status_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
