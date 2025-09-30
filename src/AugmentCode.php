<?php

declare(strict_types=1);

namespace GeertLucas\LaravelBoostAugmentCode;

use Laravel\Boost\Contracts\Agent;
use Laravel\Boost\Install\CodeEnvironment\CodeEnvironment;
use Laravel\Boost\Install\Enums\Platform;

class AugmentCode extends CodeEnvironment implements Agent
{
    public function name(): string
    {
        return 'augment_code';
    }

    public function displayName(): string
    {
        return 'Augment Code';
    }

    public function systemDetectionConfig(Platform $platform): array
    {
        return match ($platform) {
            Platform::Darwin, Platform::Linux => [
                'command' => 'which auggie',
            ],
            Platform::Windows => [
                'command' => 'where auggie 2>nul',
            ],
        };
    }

    public function projectDetectionConfig(): array
    {
        return [
            'paths' => ['.augment'],
            'files' => ['.augment/rules/guidelines.md'],
        ];
    }

    public function guidelinesPath(): string
    {
        return '.augment/rules/guidelines.md';
    }
}
