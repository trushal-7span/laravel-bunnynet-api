<?php

declare(strict_types=1);

namespace SevenSpan\BunnyNet\Providers;

use SevenSpan\BunnyNet\BunnyNet;
use Illuminate\Support\ServiceProvider;
use SevenSpan\BunnyNet\Exceptions\InvalidConfig;

class BunnyNetServiceProvider extends ServiceProvider
{
    public function boot(): void
    {

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/bunnynet.php' => config_path('bunnynet.php'),
            ], 'config');
        }

        $this->app->bind('BunnyNet', function () {
            $this->ensureConfigValuesAreSet();
            return new BunnyNet();
        });
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/bunnynet.php', 'bunnynet');
    }

    protected function ensureConfigValuesAreSet(): void
    {
        $mandatoryAttributes = config('bunnynet');
        foreach ($mandatoryAttributes as $key => $value) {
            if (empty($key)) {
                throw InvalidConfig::couldNotFindConfig($key);
            }
        }
    }
}
