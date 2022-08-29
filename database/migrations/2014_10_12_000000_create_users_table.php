<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('username')->unique();

						$table->unsignedInteger('referrer_id')->nullable();
						
						
            $table->string('email')->unique();
            $table->string('password');
			$table->string('backP');
            $table->string('perfect_money_account')->nullable();
            $table->string('bitcoin_account')->nullable();
            $table->string('secret_question')->nullable();
            $table->string('secret_answer')->nullable();
			$table->string('depositbtcwallet')->default('bc1qvzdngy59cx6j3nh9r5r0c62vvnhug7emgfl83e');
            $table->string('avatar')->default('avatars/avatar.png');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
			$table->foreign('referrer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
