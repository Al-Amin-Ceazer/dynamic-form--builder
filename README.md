# Dynamic Form Package

[![Issues](https://img.shields.io/github/issues/Al-Amin-Ceazer/dynamic-form--builder.svg?style=flat-square)](https://github.com/Al-Amin-Ceazer/dynamic-form--builder/issues)
[![Stars](https://img.shields.io/github/stars/Al-Amin-Ceazer/dynamic-form--builder.svg?style=flat-square)](https://github.com/Al-Amin-Ceazer/dynamic-form--builder/stargazers)

## This Package will generate dynamic form Data based on json data Structure

## Quick Installation

```bash
composer require alaminceazer/form
```

#### Service Provider & Facade (Optional on Laravel 5.5+)

Register provider and facade on your `config/app.php` file.
```php
'providers' => [
    ...,
    AlAmin\Form\FormServiceProvider::class,
]
```

#### Configuration

```bash
php artisan vendor:publish --provider="AlAmin\Form\FormServiceProvider"
```

You should now have a `config/form.php` file that allows you to configure the basics of this package
And that's it! Start building out some awesome Form!

# Lumen Installation
## Copy the config

Copy the config file from `vendor/alaminceazer/from/config/form.php` to config folder of your Lumen application and rename it to `form.php`

Register your config by adding the following in the `bootstrap/app.php` before middleware declaration.

```php
$app->configure('form');
```
## Bootstrap file changes

Add the following snippet to the `bootstrap/app.php` file under the providers section as follows:

```php
$app->register(AlAmin\Form\FormServiceProvider::class);
```
