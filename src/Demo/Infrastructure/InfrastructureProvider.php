<?php

namespace Demo\Infrastructure;

use Demo\Infrastructure\Eloquent\UserEloquent;
use Demo\Infrastructure\Repositories\UserRepository;
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
                return new UserRepository(
                    new UserEloquent
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
