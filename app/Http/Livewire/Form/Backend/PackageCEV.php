<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Package;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class PackageCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $name, $image;

    // Custom Values
    public $action, $isUploaded = false, $package;

    protected $rules = [
        'name' => '',
        'image' => '',
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
            $validatedData['image'] = $this->image->store('package_images');
        }

        Package::create($validatedData);

        notify()->success('Package Saved Successfully!');

        return $this->redirectRoute('admin.package.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('package_images');
        }

        Package::where('id', $this->package)->update($validatedData);

        notify()->success('Package Updated Successfully!');

        return $this->redirectRoute('admin.package.index');
    }

    public function mount($package)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Package::findOrFail($package);
            $this->name = $data->name;
            $this->image = $data->image;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.package-c-e-v');
    }
}
