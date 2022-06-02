<?php

namespace App\Http\Livewire\Pagination\Frontend;

use App\Models\Package;
use App\Models\PackageList;
use Livewire\Component;

class Packages extends Component
{
    public $package;

    public $package_id;

    public function mount()
    {
        $this->package = Package::get();
    }

    public function render()
    {
        if ($this->package_id == null) {
            $data = PackageList::with('package')->get();
        } else {
            $data = PackageList::with('package')->where('package_id', $this->package_id)->get();
        }

        return view('livewire.pagination.frontend.packages', compact('data'));
    }
}
