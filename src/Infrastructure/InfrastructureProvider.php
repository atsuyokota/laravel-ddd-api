<?php

namespace Demo\Infrastructure;

use Illuminate\Support\ServiceProvider;
use Demo\Infrastructure\Repositories\ArticleRepositoryInterface;

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
            ArticleRepositoryInterface::class,
            function ($app) {
                return new \Demo\Infrastructure\Repositories\ArticleRepository(
                    new \Demo\Infrastructure\Eloquent\ArticleEloquent
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
