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
            $table->string('name', 25);
            $table->string('worker_id', 10);
            $table->string('position', 20);
            $table->string('phone_no', 10);
            $table->string('email');
            $table->string('center',15);
            $table->string('district',15);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('status')->default('active');
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