<?php

namespace Demo\Infrastructure;

use Illuminate\Support\ServiceProvider;
use Demo\Infrastructure\Repositories\UserRepositoryInterface;

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
            UserRepositoryInterface::class,
            function ($app) {
                return new \Demo\Infrastructure\Repositories\UserRepository(
                    new \Demo\Infrastructure\Eloquent\UserEloquent
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
