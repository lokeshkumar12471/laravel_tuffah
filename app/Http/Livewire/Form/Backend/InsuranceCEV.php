<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Insurance;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class InsuranceCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $name, $image, $link;

    // Custom Values
    public $action, $isUploaded = false, $insurance;

    protected $rules = [
        'name' => '',
        'image' => '',
        'link' => '',
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
            $validatedData['image'] = $this->image->store('insurance_images');
        }

        Insurance::create($validatedData);

        notify()->success('Insurance Saved Successfully!');

        return $this->redirectRoute('admin.insurance.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('insurance_images');
        }

        Insurance::where('id', $this->insurance)->update($validatedData);

        notify()->success('Insurance Updated Successfully!');

        return $this->redirectRoute('admin.insurance.index');
    }

    public function mount($insurance)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Insurance::findOrFail($insurance);
            $this->name = $data->name;
            $this->image = $data->image;
            $this->link = $data->link;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.insurance-c-e-v');
    }
}
