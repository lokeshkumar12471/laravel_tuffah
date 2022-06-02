<?php

namespace App\Http\Livewire\Form\Frontend;

use App\Models\BookAppointment;
use App\Services\Helper;
use Livewire\Component;
use Rahulreghunath\Textlocal\Textlocal;

class BookAppointmentForm extends Component
{
    public $team_id = null;
    public $name;
    public $email;
    public $gender;
    public $phone;
    public $age;
    public $address;
    public $previous_record;
    public $previous_record_description;
    public $appointment_date;
    public $appointment_time;

    public $success;

    public $team;

    public function mount()
    {
        $this->team = Helper::getKeyValues('Team', 'name', 'id');
        // dd($this->team_id);
    }

    protected $rules = [
        'team_id' => '',
        'name' => '',
        'email' => '',
        'gender' => '',
        'phone' => '',
        'age' => '',
        'address' => '',
        'previous_record' => '',
        'previous_record_description' => '',
        'appointment_date' => '',
        'appointment_time' => ''
    ];

    public function submit()
    {
        $validatedData = $this->validate();

        BookAppointment::create($validatedData);

        $this->success = 'Thanks for Booking Appointment. We will Contact you ASAP!';

        $message = "Dear Mrs. Syed Abbas Mashaddy Abba,%nYour Appointment is fixed with Dr.Ayesha Khaliq on 05/Dec/2021 @ 01:45 AM.%nFrom,%nSunday Clinic For Ummah - UMDAA";
        $numbers = "'918639623367'";

        $sms = new Textlocal();
        $sms->send($message, $numbers);

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->team_id = '';
        $this->name = '';
        $this->email = '';
        $this->gender = '';
        $this->phone = '';
        $this->age = '';
        $this->address = '';
        $this->previous_record = '';
        $this->previous_record_description = '';
        $this->appointment_date = '';
        $this->appointment_time = '';
    }
    public function render()
    {
        return view('livewire.form.frontend.book-appointment-form');
    }
}
