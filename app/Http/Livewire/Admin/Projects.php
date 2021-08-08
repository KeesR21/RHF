<?php

namespace App\Http\Livewire\Admin;

use App\Http\Resources\ProjectCollection;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Project;

class Projects extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $content;
    public $viewMode = false;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'content' => 'required'
    ];

    public function saveProject()
    {
        // dd($this->content);
        $this->validate();

        Project::create([
            'title' => $this->title,
            'description' => $this->description,
            'body' => $this->content,
            'slug' => str_slug($this->title)
        ]);

        session()->flash('message', 'Project saved Successfully');

        $this->resetInputs();
    }

    public function loadProjectInfoToForm(Project $project)
    {

        $this->title = $project->title;
        $this->description = $project->description;
        $this->content = $project->body;

        $this->viewMode = true;
    }

    public function deleteProject(Project $project)
    {
        $project->delete();
        session()->flash('delete', 'Project Deleted Successfuly');
    }

    function resetInputs()
    {
        $this->title = '';
        $this->description = '';
        $this->content = '';
    }

    public function render()
    {
        return view('livewire.admin.projects', [
            'projects' => new ProjectCollection(Project::all())
        ])->layout('layouts.admin');
    }
}
