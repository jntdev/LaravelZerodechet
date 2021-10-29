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
            $table->dateTime('date')->default(now());
            $table->string('city')->default('');
            $table->string('location')->default('');
            $table->boolean('WC')->default(0);
            $table->boolean('child')->default(0);
            $table->boolean('materiel')->default(0);
            $table->decimal('nb_max_user')->default('1');
            $table->time('duration')->default('100');
            $table->string('title')->default('');
            $table->mediumText('description');
            $table->mediumText('listmateriel');
            $table->decimal('user_id')->default('1');
            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->default(now());
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
