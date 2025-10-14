<?php

declare(strict_types=1);

namespace Gldrenthe89\LaravelBoostAugmentCode;

use Illuminate\Support\ServiceProvider;
use Laravel\Boost\Boost;

class AugmentCodeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Boost::registerCodeEnvironment('augment_code', AugmentCode::class);
    }
}
