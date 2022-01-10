<?php

namespace App\Providers;

use App\Models\Departments;
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
        $departments = Departments::orderby('name', 'asc')->where('status', 'Ativo')->get();
        $menu = Departments::orderby('name', 'asc')->where('status', 'Menu')->get();
        view()->share([
            'departments' => $departments,
            'menu' => $menu
        ]);
    }
}
