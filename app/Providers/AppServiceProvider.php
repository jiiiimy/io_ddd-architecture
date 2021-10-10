<?php

namespace App\Providers;

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
        $this->app->bind('App\Services\Article\ArticleDomainService');
        $this->app->bind('App\Services\Article\ArticleApplicationService');
        $this->app->bind('App\Repositories\Article\ArticleRepositoryInterface', 'App\Repositories\Article\ArticleRepository');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
