<?php

namespace App\Providers;

use App\Models\Departments;
use App\Models\Order;
use Illuminate\Http\Request;
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
        $menu = Departments::orderby('created_at', 'desc')->where('status', 'Menu')->get();
        return view()->share([
            'departments' => $departments,
            'menu' => $menu
        ]);
    }
}
