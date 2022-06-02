<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Slider;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class SliderCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $image, $on;

    // Custom Values
    public $action, $isUploaded = false, $slider;


    protected $rules = [
        'image' => '',
        'on' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        if (gettype($this->image) != 'string') {
            $this->isUploaded = true;
        }
    }

    public function store()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('slider_images');
        }
        $validatedData['on'] = 'homepage';

        Slider::create($validatedData);

        notify()->success('Slider Saved Successfully!');

        return $this->redirectRoute('admin.homepage');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('slider_images');
        }
        $validatedData['on'] = 'homepage';

        Slider::where('id', $this->slider)->update($validatedData);

        notify()->success('Slider Updated Successfully!');

        return $this->redirectRoute('admin.homepage');
    }

    public function mount($slider)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Slider::findOrFail($slider);
            $this->image = $data->image;
            $this->on = $data->on;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.slider-c-e-v');
    }
}
