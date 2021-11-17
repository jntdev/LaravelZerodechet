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
            $table->id();
            $table->string('last_name')->nullable(false);
            $table->string('first_name')->nullable(false);
            //$table->string('firstname')->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->boolean('role')->nullable();
            //$table->timestamp('email_verified_at')->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('address')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->string('phone_nb')->nullable();
            $table->string('captn_mail')->nullable();
            //$table->foreignId('role_id')->constrained();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
