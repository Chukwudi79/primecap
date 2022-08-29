<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{

    public function up()
    {

        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('active_deposit')->default('0.00');
            $table->unsignedBigInteger('account_balance')->default('0.00');
            $table->unsignedBigInteger('earned_total')->default('0.00');
            $table->unsignedInteger('user_id')->unique();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
