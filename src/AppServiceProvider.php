<?php

namespace LaravelLiberu\Teams;

use Illuminate\Support\ServiceProvider;
use LaravelLiberu\DynamicMethods\Services\Methods;
use LaravelLiberu\Teams\DynamicRelations\Teams;
use LaravelLiberu\Users\Models\User;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        Methods::bind(User::class, [Teams::class]);
    }
}
