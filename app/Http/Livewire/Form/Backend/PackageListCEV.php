<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\PackageList;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class PackageListCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $package_id, $name, $image, $list;

    // Custom Values
    public $action, $isUploaded = false, $packageList;

    protected $rules = [
        'package_id' => '',
        'name' => '',
        'image' => '',
        'list' => '',
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
            $validatedData['image'] = $this->image->store('packageList_images');
        }

        PackageList::create($validatedData);

        notify()->success('Package List Saved Successfully!');

        return $this->redirectRoute('admin.package-list.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('packageList_images');
        }

        PackageList::where('id', $this->packageList)->update($validatedData);

        notify()->success('Package List Updated Successfully!');

        return $this->redirectRoute('admin.package-list.index');
    }

    public function mount($packageList)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = PackageList::findOrFail($packageList);
            $this->package_id = $data->package_id;
            $this->name = $data->name;
            $this->image = $data->image;
            $this->list = $data->list;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.package-list-c-e-v');
    }
}
