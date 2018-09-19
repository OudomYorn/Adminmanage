<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index()->nullable();
            $table->string('gender')->nullable();
            $table->date('datebirst')->nullable();
            $table->string('place')->nullable();
            $table->string('card')->index()->nullable();
            $table->date('startdate')->nullable();
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
        Schema::dropIfExists('studens');
    }
}
