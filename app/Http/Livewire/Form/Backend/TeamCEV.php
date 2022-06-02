<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Service;
use App\Models\Team;
use App\Models\TeamService;
use App\Services\Helper;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class TeamCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $department_id, $name, $image, $qualification, $profile, $experience;
    public $services = [];

    // Custom Values
    public $action, $isUploaded = false, $team;

    protected $rules = [
        'name' => '',
        'image' => '',
        'qualification' => '',
        'department_id' => '',
        'profile' => '',
        'experience' => '',
        'services' => ''
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        if (gettype($this->image) != 'string') {
            $this->isUploaded = true;
        }
    }

    public function updatedDepartmentId($department_id)
    {
        if (!is_null($department_id)) {
            $this->services = Helper::getKeyValues('Service', 'title', 'id', 'department_id', $department_id);
        }
    }

    public function store()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('team_images');
        }

        $new_team  = Team::create($validatedData);

        foreach (array_keys(array_filter($validatedData['services'])) as $key => $value) {
            TeamService::create(['team_id' => $new_team->id, 'service_id' => $value]);
        }

        notify()->success('Team Saved Successfully!');

        return $this->redirectRoute('admin.team.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('team_images');
        }

        TeamService::where('team_id', '=', $this->team)->delete();

        foreach (array_keys(array_filter($validatedData['services'])) as $key => $value) {
            TeamService::create(['team_id' => $this->team, 'service_id' => $value]);
        }

        unset($validatedData['services']);

        Team::where('id', $this->team)->update($validatedData);

        notify()->success('Team Updated Successfully!');

        return $this->redirectRoute('admin.team.index');
    }

    public function mount($team)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Team::findOrFail($team);
            $this->name = $data->name;
            $this->image = $data->image;
            $this->qualification = $data->qualification;
            $this->department_id = $data->department_id;
            $this->profile = $data->profile;
            $this->experience = $data->experience->format('Y-m-d');
        }

        if (!is_null($this->department_id)) {
            $this->services = Helper::getKeyValues('Service', 'title', 'id', 'department_id', $this->department_id);
        } else {
            $this->services = collect();
        }

        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.team-c-e-v');
    }
}
