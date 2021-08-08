<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostDetails extends Component
{
    public $post;
    public $prev_post;
    public $next_post;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->prev_post = Post::where('id','<', $post->id)->select(['slug', 'title', 'image', 'created_at'])->first();
        $this->next_post = Post::where('id','>', $post->id)->select(['slug', 'title', 'image', 'created_at'])->first();
    }
    
    public function render()
    {
        return view('livewire.post-details');
    }
}
