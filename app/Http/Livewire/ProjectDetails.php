<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class ProjectDetails extends Component
{
    public $project;
    public $prev_project;
    public $next_project;

    public function mount(Project $project)
    {
        $this->project = $project;
        $this->prev_project = Project::where('id','<', $project->id)->select(['slug', 'title', 'image', 'created_at'])->first();
        $this->next_project = Project::where('id','>', $project->id)->select(['slug', 'title', 'image' , 'created_at'])->first();
    }

    public function render()
    {
        return view('livewire.project-details')->layout('layouts.app');
    }
}
