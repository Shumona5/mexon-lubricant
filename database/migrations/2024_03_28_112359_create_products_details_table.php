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
        Schema::create('products_details', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle_name');
            $table->text('description')->nullable();
            $table->string('image');
            $table->boolean('is_has_button')->default(false);
            $table->string('button_url')->nullable();
            $table->string('design_pattern')->nullable()->comment('design pattern will be left or right');
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
        Schema::dropIfExists('products_details');
    }
};
