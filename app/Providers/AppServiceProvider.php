<?php

namespace App\Providers;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
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
        Route::bind('your_roll', function ($value) {
    return Student::where('roll_no', $value)->firstOrFail();
});
    }
}
