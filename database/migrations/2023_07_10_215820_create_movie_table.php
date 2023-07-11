<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('description');
            $table->string('duration');
            $table->string('director');
            $table->integer('year');
            $table->string('url');
            $table->boolean('important')->default(false);
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')->references('id')->on('category')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
