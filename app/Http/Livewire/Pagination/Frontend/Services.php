<?php

namespace App\Http\Livewire\Pagination\Frontend;

use App\Models\Department;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Services extends Component
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
                $data = Service::with('department')->paginate(2);
            } else {
                $data = Service::with('department')->paginate(3);
            }
        } elseif ($this->department_id == null && $this->where == null) {
            $data = Service::with('department')->paginate(6);
        } else {
            if (!\Jenssegers\Agent\Facades\Agent::isTablet() && \Jenssegers\Agent\Facades\Agent::isMobile()) {
                $data = Service::with('department')->where('department_id', $this->department_id)->paginate(2);
            } elseif (\Jenssegers\Agent\Facades\Agent::isTablet()) {
                $data = Service::with('department')->where('department_id', $this->department_id)->paginate(3);
            } else {
                $data = Service::with('department')->where('department_id', $this->department_id)->paginate(6);
            }
        }

        return view('livewire.pagination.frontend.services', compact('data'));
    }
}
