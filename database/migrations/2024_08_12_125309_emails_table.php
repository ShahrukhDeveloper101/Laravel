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
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->text('project_type');
            $table->string('name');
            $table->string('email');
            $table->text('website');
            $table->text('first_email_date');
            $table->text('first_email_sent');
            $table->text('first_email_response');
            
            $table->text('first_followUp_date');
            $table->text('first_followUp_sent');
            $table->text('first_followUp_response');
            
            $table->text('second_followUp_date');
            $table->text('second_followUp_sent');
            $table->text('second_followUp_response');
            
            $table->text('third_followUp_date');
            $table->text('third_followUp_sent');
            $table->text('third_followUp_response');
            
            $table->text('fourth_followUp_date');
            $table->text('fourth_followUp_sent');
            $table->text('fourth_followUp_response');

            $table->text('fifth_followUp_date');
            $table->text('fifth_followUp_sent');
            $table->text('fifth_followUp_response');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
