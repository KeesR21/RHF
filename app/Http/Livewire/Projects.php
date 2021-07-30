<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class Projects extends Component
{
    public $projects;

    public function mount()
    {
        $data = Project::all();
        $this->projects = $data;
    }
    
    public function render()
    {
        return view('livewire.projects');
    }
}
