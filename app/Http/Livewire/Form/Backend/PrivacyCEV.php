<?php

namespace App\Http\Livewire\Form\Backend;

use App\Services\Helper;
use Livewire\Component;

class PrivacyCEV extends Component
{
    public $privacy_description;

    public function mount()
    {
        $this->privacy_description = Helper::get_static_option('privacy_description');
    }

    protected $rules = [
        'privacy_description' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        foreach ($validatedData as $key => $value) {
            Helper::set_static_option($key, $value);
        }

        return $this->redirectRoute('admin.privacy');
    }

    public function render()
    {
        return view('livewire.form.backend.privacy-c-e-v');
    }
}
