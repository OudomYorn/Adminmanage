<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname')->index()->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('datebirst')->nullable();
            $table->string('place')->nullable();
            $table->string('business')->nullable();
            $table->float('payment')->nullable();
            $table->string('codecompany')->index()->nullable();
            $table->string('level')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('user_accounts');
    }
}
