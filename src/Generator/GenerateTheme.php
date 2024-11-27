<?php

namespace TomatoPHP\FilamentThemesManager\Generator;

use Illuminate\Support\Str;
use TomatoPHP\ConsoleHelpers\Traits\HandleFiles;
use TomatoPHP\ConsoleHelpers\Traits\HandleStub;
use TomatoPHP\FilamentThemesManager\Generator\Traits\GenerateInfo;
use TomatoPHP\FilamentThemesManager\Generator\Traits\GenerateModule;
use TomatoPHP\FilamentThemesManager\Generator\Traits\GenerateReadMe;

class GenerateTheme
{
    use GenerateInfo;
    use GenerateModule;
    use GenerateReadMe;
    use HandleFiles;
    use HandleStub;

    public function __construct(
        private string $themeName,
        private ?string $themeDescription,
        public ?string $stubPath = null,
        public ?string $themeTitle = null
    ) {
        $this->themeTitle = $themeName;
        $this->themeName = Str::of($themeName)->camel()->ucfirst()->toString();
        $this->stubPath = __DIR__ . '/../../stubs/';
        $this->publish = __DIR__ . '/../../stubs/';
    }

    public function generate(): void
    {
        $this->generateModule();
        $this->generateReadMe();
        $this->generateInfo();
    }
}
