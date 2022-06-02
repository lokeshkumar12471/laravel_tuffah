<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Department;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class DepartmentCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $name, $image, $excerpt;

    // Custom Values
    public $action, $isUploaded = false, $department;

    protected $rules = [
        'name' => '',
        'image' => '',
        'excerpt' => '',
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
            $validatedData['image'] = $this->image->store('department_images');
        }

        Department::create($validatedData);

        notify()->success('Department Saved Successfully!');

        return $this->redirectRoute('admin.department.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('department_images');
        }

        Department::where('id', $this->department)->update($validatedData);

        notify()->success('Department Updated Successfully!');

        return $this->redirectRoute('admin.department.index');
    }

    public function mount($department)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Department::findOrFail($department);
            $this->name = $data->name;
            $this->image = $data->image;
            $this->excerpt = $data->excerpt;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.department-c-e-v');
    }
}
