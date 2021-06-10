<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('location');
            $table->string('type');
            $table->integer('price');
            $table->string('size');
            $table->string('for');
            $table->longText('description');
            $table->string('image_feature');
            $table->string('images')->nullable();
            $table->string('owner_phone');
            $table->string('owner_email');
            $table->string('status')->default('available');
            $table->foreignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
