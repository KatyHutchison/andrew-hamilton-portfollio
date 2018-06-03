<?php

namespace App\Providers;

use App\SocialMedia;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $socialMedia = SocialMedia::get()
            ->mapWithKeys(function($media){
                return [$media->name => $media];
            });
        View::share('socialMedia', $socialMedia);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
