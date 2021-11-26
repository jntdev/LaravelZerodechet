<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->dateTime('date')->nullable();
            $table->time('duration')->default('0100');
            $table->string('address')->default('');
            $table->string('time')->default('');
            $table->string('city')->default('');
            $table->mediumText('description');
            $table->boolean('has_equipment')->default(0)->nullable();
            $table->boolean('child_authorized')->default(0)->nullable();
            $table->mediumText('list_equipment')->nullable();
            $table->boolean('has_toilets')->default(0)->nullable();
            $table->string('event_picture')->default('logo.png');
            $table->integer('nb_max_user');


            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->foreignId('user_id')->constrained()->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
