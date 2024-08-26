<?php

namespace App\Providers;

use App\Enums\LoggerType;
use App\Services\Logger\LoggerFactory;
use App\Services\Logger\LoggerInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(LoggerInterface::class, function ($app) {
            $loggerType = LoggerType::from(config('mylogging.default'));
            return (new LoggerFactory())->createLogger($loggerType);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
