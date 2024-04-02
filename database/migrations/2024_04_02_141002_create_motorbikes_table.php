<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorbikes', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->text('first_short_description')->nullable();
            $table->longText('first_long_description')->nullable();
            $table->string('first_image')->nullable();
            $table->string('title2');
            $table->text('second_short_description')->nullable();
            $table->longText('second_long_description')->nullable();
            $table->string('second_image')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('active');
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
        Schema::dropIfExists('motorbikes');
    }
};
