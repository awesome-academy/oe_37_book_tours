<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Type;

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
        //
        Schema::defaultStringLength(191);

        view()->composer('book_tour.layout.show_types', function ($view)
        {
            $types = Type::Select('id', 'name', 'parent_id')->get();
            $view->with(['types' => $types]);
        });
    }
}
