<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AboutUs;
use App\Http\Livewire\OurMission;
use App\Http\Livewire\Projects;
use App\Http\Livewire\ProjectDetails;
use App\Http\Livewire\ContactUs;
use App\Http\Livewire\Admin\Posts;
use App\Http\Livewire\Admin\BoardMembers;
use App\Http\Livewire\Admin\EditPost;
use App\Http\Livewire\Admin\EditSettings;
use App\Http\Livewire\Admin\EditUser;
use App\Http\Livewire\Admin\Partners;
use App\Http\Livewire\Admin\Projects as OurProjects;
use App\Http\Livewire\PostDetails;
use App\Http\Resources\postsCollection;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome',[
        'posts' => new postsCollection(Post::all())
    ]);
})->name('index');

Route::get('/about-us', AboutUs::class);
Route::get('/our-mission', OurMission::class);
Route::get('/our-projects', Projects::class);
Route::get('/project/{project:slug}', ProjectDetails::class);
Route::get('/post/{post:slug}', PostDetails::class);
Route::get('/contact-us', ContactUs::class);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', OurProjects::class);

    Route::prefix('admin')->group(function() {
        Route::get('/projects', OurProjects::class);
        Route::get('/posts', Posts::class);
        Route::get('/post/edit/{post}', EditPost::class);
        Route::get('/board-members', BoardMembers::class);
        Route::get('/update/{id}', EditUser::class);
        Route::get('/partners', Partners::class);
        Route::get('/settings', EditSettings::class);
    });
});
