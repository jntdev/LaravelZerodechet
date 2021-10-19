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
            $table->dateTime('date');
            $table->string('location');
            $table->boolean('allow_child');
            $table->boolean('wc');
            $table->boolean('material');
            $table->decimal('nb_max_user');
            $table->time('duration');
            $table->string('title');
            $table->string('description');
            $table->decimal('user_id');
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
