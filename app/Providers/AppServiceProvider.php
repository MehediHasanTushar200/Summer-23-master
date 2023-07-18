<?php

namespace App\Providers;
use App\Models\category;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\view;

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
        $categories=category::all();
        view::share('cats',$categories);
        
        Paginator::useBootstrap();
        
    }
}
