<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\About;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $title, $image, $excerpt;

    // Custom Values
    public $action, $isUploaded = false, $about;

    protected $rules = [
        'title' => '',
        'image' => '',
        'excerpt' => ''
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
            $validatedData['image'] = $this->image->store('about_images');
        }

        About::create($validatedData);

        notify()->success('About Saved Successfully!');

        return $this->redirectRoute('admin.about.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        About::where('id', $this->about)->update($validatedData);

        notify()->success('About Updated Successfully!');

        return $this->redirectRoute('admin.about.index');
    }

    public function mount($about)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = About::findOrFail($about);
            $this->title = $data->title;
            $this->image = $data->image;
            $this->excerpt = $data->excerpt;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.about-c-e-v');
    }
}
