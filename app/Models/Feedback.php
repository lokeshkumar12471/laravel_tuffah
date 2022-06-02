<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'admission_number',
        'email',
        'phone',
        'how',
        'initial_response_rating',
        'initial_response_text',
        'explanation_of_treatment_rating',
        'explanation_of_treatment_text',
        'cost_of_treatment_rating',
        'cost_of_treatment_text',
        'reception_rating',
        'reception_text',
        'dmo_rating',
        'dmo_text',
        'nurse_rating',
        'nurse_text',
        'house_keeping_rating',
        'house_keeping_text',
        'satisfaction_of_treatment_rating',
        'satisfaction_of_treatment_text',
        'any_other_feedback',
    ];
}
