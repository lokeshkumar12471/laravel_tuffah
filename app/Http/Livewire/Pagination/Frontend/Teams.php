<?php

namespace App\Http\Livewire\Pagination\Frontend;

use App\Models\Department;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;

class Teams extends Component
{
    use WithPagination;

    public $department;

    public $department_id;

    public $where = null;

    public function mount()
    {
        $this->department = Department::get();
    }

    public function render()
    {
        if ($this->department_id == null && $this->where == 'homepage') {
            if (!\Jenssegers\Agent\Facades\Agent::isTablet() && \Jenssegers\Agent\Facades\Agent::isMobile()) {
                $data = Team::with('department')->paginate(1);
            } elseif (\Jenssegers\Agent\Facades\Agent::isTablet()) {
                $data = Team::with('department')->paginate(2);
            } else {
                $data = Team::with('department')->paginate(4);
            }
        } elseif ($this->department_id == null & $this->where == null) {
            $data = Team::with('department')->paginate(8);
        } else {
            $data = Team::with('department')->where('department_id', $this->department_id)->paginate(8);
        }

        return view('livewire.pagination.frontend.teams', compact('data'));
    }
}
