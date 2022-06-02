<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Count;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class CountCEV extends Component
{
    // Model Values
    public $value, $title, $on, $icon;

    // Custom Values
    public $action, $count;

    protected $rules = [
        'value' => '',
        'title' => '',
        'on' => '',
        'icon' => ''
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validatedData = $this->validate();

        $validatedData['on'] = 'homepage';

        Count::create($validatedData);

        notify()->success('Count Saved Successfully!');

        return $this->redirectRoute('admin.homepage');
    }

    public function update()
    {
        $validatedData = $this->validate();

        $validatedData['on'] = 'homepage';

        Count::where('id', $this->count)->update($validatedData);

        notify()->success('Count Updated Successfully!');

        return $this->redirectRoute('admin.homepage');
    }

    public function mount($count)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Count::findOrFail($count);
            $this->value = $data->value;
            $this->title = $data->title;
            $this->on = $data->on;
            $this->icon = $data->icon;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.count-c-e-v');
    }
}
