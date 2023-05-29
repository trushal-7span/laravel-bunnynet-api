<?php

declare(strict_types=1);

namespace SevenSpan\BunnyNet\Facades;

use Illuminate\Support\Facades\Facade;

class BunnyNet extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'BunnyNet';
    }
}
