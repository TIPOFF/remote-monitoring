# Laravel Package for Escape Room Remote Monitoring

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tipoff/remote-monitoring.svg?style=flat-square)](https://packagist.org/packages/tipoff/remote-monitoring)
![Tests](https://github.com/tipoff/remote-monitoring/workflows/Tests/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/tipoff/remote-monitoring.svg?style=flat-square)](https://packagist.org/packages/tipoff/remote-monitoring)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require tipoff/remote-monitoring
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Tipoff\RemoteMonitoring\RemoteMonitoringServiceProvider" --tag="remote-monitoring-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Tipoff\RemoteMonitoring\RemoteMonitoringServiceProvider" --tag="remote-monitoring-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$remote-monitoring = new Tipoff\RemoteMonitoring();
echo $remote-monitoring->echoPhrase('Hello, Tipoff!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Tipoff](https://github.com/tipoff)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
