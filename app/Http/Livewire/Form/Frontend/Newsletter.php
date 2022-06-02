<?php

namespace App\Http\Livewire\Form\Frontend;

use App\Models\Subscribe;
use Livewire\Component;
use Rahulreghunath\Textlocal\Textlocal;

class Newsletter extends Component
{
    public $email;

    public $success;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function submit()
    {
        $validatedData = $this->validate();

        Subscribe::create($validatedData);

        $this->success = 'Thanks for subscribing!';

        $message = "Dear Mrs. Syed Abbas Mashaddy Abba,%nYour Appointment is fixed with Dr.Ayesha Khaliq on 05/Dec/2021 @ 01:45 AM.%nFrom,%nSunday Clinic For Ummah - UMDAA";
        $numbers = "'918639623367'";

        $sms = new Textlocal();
        $sms->send($message, $numbers);

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->email = '';
    }

    public function render()
    {
        return view('livewire.form.frontend.newsletter');
    }
}
