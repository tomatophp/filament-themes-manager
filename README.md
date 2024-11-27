![Screenshot](https://raw.githubusercontent.com/tomatophp/filament-themes-manager/master/art/screenshot.jpg)

# Filament themes manager

[![Latest Stable Version](https://poser.pugx.org/tomatophp/filament-themes-manager/version.svg)](https://packagist.org/packages/tomatophp/filament-themes-manager)
[![License](https://poser.pugx.org/tomatophp/filament-themes-manager/license.svg)](https://packagist.org/packages/tomatophp/filament-themes-manager)
[![Downloads](https://poser.pugx.org/tomatophp/filament-themes-manager/d/total.svg)](https://packagist.org/packages/tomatophp/filament-themes-manager)

Manage your frontend themes using Modules HMVC Arch and easy to use settings and upload support for FilamentPHP

## Installation

```bash
composer require tomatophp/filament-themes-manager
```
after install your package please run this command

```bash
php artisan filament-themes-manager:install
```

finally register the plugin on `/app/Providers/Filament/AdminPanelProvider.php`

```php
->plugin(\TomatoPHP\FilamentThemesManager\FilamentThemesManagerPlugin::make())
```


## Publish Assets

you can publish config file by use this command

```bash
php artisan vendor:publish --tag="filament-themes-manager-config"
```

you can publish views file by use this command

```bash
php artisan vendor:publish --tag="filament-themes-manager-views"
```

you can publish languages file by use this command

```bash
php artisan vendor:publish --tag="filament-themes-manager-lang"
```

you can publish migrations file by use this command

```bash
php artisan vendor:publish --tag="filament-themes-manager-migrations"
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

Please see [SECURITY](SECURITY.md) for more information about security.

## Credits

- [Fady Mondy](mailto:info@3x1.io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
