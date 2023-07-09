<?php

namespace App\Providers;

use App\Models\Attachment;
use App\Observers\AttachmentObserver;
use Illuminate\Pagination\Paginator;
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
    //    if(config('app.app_online')){
          
    //    }

    //    $this->app->bind('path.public', function () {
    //     return base_path('public_html');
    // });

    // // dd(public_path());

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Attachment::observe(AttachmentObserver::class);
        Paginator::useBootstrapFour();
    }
}
