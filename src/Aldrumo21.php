<?php

namespace AldrumoThemes\Aldrumo21;

use Aldrumo\ThemeManager\Theme\ThemeBase;

class Aldrumo21 extends ThemeBase
{
    public function boot(): void
    {
        parent::boot();

        $this->serviceProvider->setPublishes(
            [
                __DIR__ . '/../resources/dist' => public_path('aldrumo/aldrumo21'),
            ],
            'aldrumo-public'
        );
    }
}
