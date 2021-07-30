<?php

namespace App\Http\Livewire\Admin;

use App\Http\Resources\postsCollection;
use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $content;
    public $image;
    public $p_id;

    public $viewMode = false;


    protected $rules = [
        'title' => 'required|min:10',
        'description' => 'required|min:30',
        'content' => 'required|min:100',
        'image' => 'required|mimes:jpg,jpeg,png,svg|max:3072'
    ];


    public function savePost()
    {
        $this->validate();

        $url = $this->image->store('posts', 'public');

        Post::create([
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            'image' => $url,
        ]);

        session()->flash('message', 'Post Saved Successfully');

        $this->resetInputs();
    }

    public function loadPostInfoToForm(Post $post)
    {
        $this->title = $post->title;
        $this->description = $post->description;
        $this->content = $post->content;

        $this->viewMode = true;

        $this->p_id = $post->id;
    }


    function deletePost(Post $post)
    {
        $post->delete();
        session()->flash('delete', 'Post deleted Sucessfully');
    }

    function resetInputs()
    {
        $this->title = '';
        $this->description = '';
        $this->content = '';
        $this->image = '';
    }

    public function render()
    {
        return view('livewire.admin.posts', [
            'posts' => new postsCollection(Post::all())
        ])->layout('layouts.admin');
    }
}
