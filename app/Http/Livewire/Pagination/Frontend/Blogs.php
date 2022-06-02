<?php

namespace App\Http\Livewire\Pagination\Frontend;

use App\Models\Blog;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;

    public $team;

    public $team_id;

    public function mount()
    {
        $this->team = Team::get();
    }

    public function render()
    {
        if ($this->team_id == null) {
            $data = Blog::with('team')->paginate(6);
        } else {
            $data = Blog::with('team')->where('team_id', $this->team_id)->paginate(6);
        }

        return view('livewire.pagination.frontend.blogs', compact('data'));
    }
}
