<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Blog;
use App\Models\Team;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $department_id, $team_id, $title, $image, $tags, $excerpt, $description;

    // Custom Values
    public $action, $isUploaded = false, $blog;

    protected $rules = [
        'department_id' => '',
        'team_id' => '',
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
            $validatedData['image'] = $this->image->store('blog_images');
        }
        $team = Team::findOrFail($this->team_id);
        $validatedData['department_id'] = $team->department_id;

        Blog::create($validatedData);

        notify()->success('Blog Saved Successfully!');

        return $this->redirectRoute('admin.blog.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('blog_images');
        }
        $team = Team::findOrFail($this->team_id);
        $validatedData['department_id'] = $team->department_id;

        Blog::where('id', $this->blog)->update($validatedData);

        notify()->success('Blog Updated Successfully!');

        return $this->redirectRoute('admin.blog.index');
    }

    public function mount($blog)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Blog::findOrFail($blog);
            $this->department_id = $data->department_id;
            $this->team_id = $data->team_id;
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
        return view('livewire.form.backend.blog-c-e-v');
    }
}
