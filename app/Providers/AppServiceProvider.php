<?php

namespace App\Providers;

use App\Models\Form;
use App\Models\Notification;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
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
        $notificationCount = 0;
        view()->composer('*', function ($view) {
            if (Auth::check()) {
                $user = Auth::user(); // Authenticated user is only accessible inside this callback

                // Share notifications and notification count with all views
                if ($user->hasRole('admin')) {
                    $notificationCount = Notification::whereNull('read_at')
                        ->whereNull('data->bidang')
                        ->count();
                } elseif ($user->hasRole('bidang_pemerintahan|bidang_sarana_prasarana|bidang_sosial_budaya|bidang_perekonomian')) {
                    $role = strtolower(str_replace(' ', '_', str_replace('bidang_', '', $user->getRoleNames()->first())));
                    // dd($role);
                    $notificationCount = Notification::whereNull('read_at')->where('data->bidang', 'like', $role)->count();
                }
                $view->with('notificationCount', $notificationCount);
            }
        });

        $notifications = Notification::latest()->get();

        // dd($notifications);
        View::share('notifications', $notifications);
        View::share('notificationCount', $notificationCount);

        // View::composer('*', function ($view) {
        //     $forms = Form::all();
        //     $view->with('forms', $forms);
        // });

        // View::composer('*', function ($view) {
        //     if (Auth::check()) {
        //         $user = Auth::user();

        //         // Ambil hanya notifikasi yang relevan untuk user ini
        //         $notifications = Notification::where(function ($query) use ($user) {
        //             $query->whereNull('data->bidang') // Jika bidang tidak diset
        //                 ->orWhere('data->bidang', '=', $user->getRoleNames()->first()); // Berdasarkan bidang user
        //         })->latest()->take(5)->get();

        //         $view->with('notifications', $notifications);
        //     }
        // });
    }
}
