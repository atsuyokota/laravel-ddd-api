<?php

namespace Demo\Infrastructure;

use Demo\Domain\Repository\UserRepositoryInterface;
use Demo\Infrastructure\Eloquent\UserEloquent;
use Demo\Infrastructure\Repository\UserRepository;
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
