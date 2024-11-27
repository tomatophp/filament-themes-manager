<?php

namespace TomatoPHP\FilamentThemesManager\Generator\Traits;

use Illuminate\Support\Facades\Artisan;

trait GenerateModule
{
    public function generateModule()
    {
        Artisan::call('module:make ' . $this->themeName);
        sleep(3);
    }
}
