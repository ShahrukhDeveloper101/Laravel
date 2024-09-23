<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural form of the model name
    protected $table = 'emails';

    // Specify the fillable fields for mass assignment
    protected $fillable = [
        'name',
        'project_type',
        'email',
        'website',
        'first_email_date', 
        'first_email_sent', 
        'first_email_response', 
        'first_followUp_date', 
        'first_followUp_sent', 
        'first_followUp_response', 
        'second_followUp_date', 
        'second_followUp_sent', 
        'second_followUp_response', 
        'third_followUp_date', 
        'third_followUp_sent', 
        'third_followUp_response', 
        'fourth_followUp_date', 
        'fourth_followUp_sent', 
        'fourth_followUp_response', 
        'fifth_followUp_date', 
        'fifth_followUp_sent', 
        'fifth_followUp_response', 
        'created_at', 
        'updated_at', 
    ];
}
