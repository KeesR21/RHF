<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $email = Setting::where('name','email')->pluck('value');
        $mission = Setting::where('name','mission')->pluck('value');
        $phone = Setting::where('name','phone')->pluck('value');
        $welcome = Setting::where('name','welcome')->pluck('value');
        $about = Setting::where('name','about')->pluck('value');
        $location = Setting::where('name','location')->pluck('value');

        view()->share([
            'email' => $email,
            'welcome' => $welcome,
            'mission' => $mission,
            'about' => $about,
            'phone' => $phone,
            'location' => $location,
        ]);
        
        Schema::defaultStringLength(191);
    }
}
