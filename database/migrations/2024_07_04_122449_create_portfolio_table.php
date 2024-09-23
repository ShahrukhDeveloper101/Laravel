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
        Schema::create('portfolio', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('industry');
            $table->string('project_type');
            $table->string('date');
            $table->string('country');
            $table->text('banner_image')->nullable();
            $table->json('all_images')->nullable();
            $table->text('main_description');
            $table->text('short_description');
            $table->integer('order');
            $table->string('category');
            $table->timestamps(); // Adds created_at and updated_at   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio');
    }
};
