<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;

class EditPost extends Component
{
    public function mount(Post $post)
    {
        dd($post);
    }

    public function render()
    {
        return view('livewire.admin.edit-post');
    }
}
