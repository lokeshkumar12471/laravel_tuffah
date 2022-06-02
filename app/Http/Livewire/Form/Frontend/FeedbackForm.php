<?php

namespace App\Http\Livewire\Form\Frontend;

use App\Models\Feedback;
use Livewire\Component;
use Rahulreghunath\Textlocal\Textlocal;

class FeedbackForm extends Component
{
    public $type;
    public $name;
    public $admission_number;
    public $email;
    public $phone;
    public $how;
    public $initial_response_rating;
    public $initial_response_text;
    public $explanation_of_treatment_rating;
    public $explanation_of_treatment_text;
    public $cost_of_treatment_rating;
    public $cost_of_treatment_text;
    public $reception_rating;
    public $reception_text;
    public $dmo_rating;
    public $dmo_text;
    public $nurse_rating;
    public $nurse_text;
    public $house_keeping_rating;
    public $house_keeping_text;
    public $satisfaction_of_treatment_rating;
    public $satisfaction_of_treatment_text;
    public $any_other_feedback;
    public $success;

    protected $rules = [
        'type' => '',
        'name' => '',
        'admission_number' => '',
        'email' => '',
        'phone' => '',
        'how' => '',
        'initial_response_rating' => '',
        'initial_response_text' => '',
        'explanation_of_treatment_rating' => '',
        'explanation_of_treatment_text' => '',
        'cost_of_treatment_rating' => '',
        'cost_of_treatment_text' => '',
        'reception_rating' => '',
        'reception_text' => '',
        'dmo_rating' => '',
        'dmo_text' => '',
        'nurse_rating' => '',
        'nurse_text' => '',
        'house_keeping_rating' => '',
        'house_keeping_text' => '',
        'satisfaction_of_treatment_rating' => '',
        'satisfaction_of_treatment_text' => '',
        'any_other_feedback' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    private function clearFields()
    {
        $this->type = '';
        $this->name = '';
        $this->admission_number = '';
        $this->email = '';
        $this->phone = '';
        $this->how = '';
        $this->initial_response_rating = '';
        $this->initial_response_text = '';
        $this->explanation_of_treatment_rating = '';
        $this->explanation_of_treatment_text = '';
        $this->cost_of_treatment_rating = '';
        $this->cost_of_treatment_text = '';
        $this->reception_rating = '';
        $this->reception_text = '';
        $this->dmo_rating = '';
        $this->dmo_text = '';
        $this->nurse_rating = '';
        $this->nurse_text = '';
        $this->house_keeping_rating = '';
        $this->house_keeping_text = '';
        $this->satisfaction_of_treatment_rating = '';
        $this->satisfaction_of_treatment_text = '';
        $this->any_other_feedback = '';
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Feedback::create($validatedData);

        $this->success = 'Thanks for Submitting Feedback. We will Contact you ASAP!';

        $message = "Dear Mrs. Syed Abbas Mashaddy Abba,%nYour Appointment is fixed with Dr.Ayesha Khaliq on 05/Dec/2021 @ 01:45 AM.%nFrom,%nSunday Clinic For Ummah - UMDAA";
        $numbers = "'918639623367'";

        $sms = new Textlocal();
        $sms->send($message, $numbers);

        $this->clearFields();
    }

    public function render()
    {
        return view('livewire.form.frontend.feedback-form');
    }
}
