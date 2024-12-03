<?php

namespace App\Providers;

use App\Models\Form;
use App\Models\Notification;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useTailwind();

        $notifications = Notification::latest()->take(5)->get();
        View::share('notifications', $notifications);

        View::composer('*', function ($view) {
            $forms = Form::all();
            $view->with('forms', $forms);
        });
    }
}
