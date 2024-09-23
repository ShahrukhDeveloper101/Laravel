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
        Schema::table('contact', function (Blueprint $table) {
            $table->text('phone')->nullable();
            $table->text('category');
            $table->text('budget');
            $table->text('project_detail');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('category');
            $table->dropColumn('budget');
            $table->dropColumn('project_detail');
        });
    }
};
