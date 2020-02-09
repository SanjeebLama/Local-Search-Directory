<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResturantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('resturant_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('priority');
            $table->integer('priorityID');
            $table->mediumText('intro');
            $table->mediumText('body');
            $table->mediumText('image')->nullable();
            $table->string('video');
            $table->string('portfolio');
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
        //
    }
}
