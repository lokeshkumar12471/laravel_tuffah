<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Service;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServiceCEV extends Component
{

    use WithFileUploads;

    // Model Values
    public $department_id, $title, $image, $tags, $excerpt, $description;

    // Custom Values
    public $action, $isUploaded = false, $service;

    protected $rules = [
        'department_id' => '',
        'title' => '',
        'image' => '',
        'tags' => '',
        'excerpt' => '',
        'description' => ''
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
            $validatedData['image'] = $this->image->store('service_images');
        }

        Service::create($validatedData);

        notify()->success('Service Saved Successfully!');

        return $this->redirectRoute('admin.service.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('service_images');
        }

        Service::where('id', $this->service)->update($validatedData);

        notify()->success('Service Updated Successfully!');

        return $this->redirectRoute('admin.service.index');
    }

    public function mount($service)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Service::findOrFail($service);
            $this->department_id = $data->department_id;
            $this->title = $data->title;
            $this->image = $data->image;
            $this->tags = $data->tags;
            $this->excerpt = $data->excerpt;
            $this->description = $data->description;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.service-c-e-v');
    }
}
