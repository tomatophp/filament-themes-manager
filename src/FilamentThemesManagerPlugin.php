<?php

namespace TomatoPHP\FilamentThemesManager;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentThemesManagerPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-themes-manager';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): self
    {
        return new FilamentThemesManagerPlugin;
    }
}
