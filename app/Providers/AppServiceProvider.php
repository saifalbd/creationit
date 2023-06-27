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
        //
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
