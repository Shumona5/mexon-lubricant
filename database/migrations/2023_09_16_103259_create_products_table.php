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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            $table->string('title1');
            $table->string('title2')->nullable();
            $table->string('image')->nullable();
            $table->string('subtitle_name')->nullable();
            $table->text('description')->nullable();
            $table->string('subtitle_image')->nullable();
            $table->boolean('is_has_button')->default(false);
            $table->string('button_text')->nullable();
            $table->string('button_url')->nullable();
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
        Schema::dropIfExists('products');
    }
};
