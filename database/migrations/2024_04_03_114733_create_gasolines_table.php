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
        Schema::create('gasolines', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('first_image')->nullable();
            $table->string('product_image')->nullable();
            $table->string('second_image')->nullable();
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
        Schema::dropIfExists('gasolines');
    }
};
