<?php

namespace App\Http\Controllers\Plugins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class ImagesController extends Controller
{
    public function store()
    {
        $post = new Post();
        $post->id = 0;
        $post->exists = true;
        $image = $post->addMediaFromRequest('upload')->toMediaCollection('images');
        
        return response()->json([
            'url' => $image->getUrl('thumb')
        ]);
    }
}
