<?php

namespace Infrastructure;

use Illuminate\Support\ServiceProvider;

class InfrastructureProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Infrastructure\Repositories\ArticleRepositoryInterface::class,
            function ($app) {
                return new \Infrastructure\Repositories\ArticleRepository(
                    new \Infrastructure\Eloquent\ArticleEloquent
                );
            }
        );
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
