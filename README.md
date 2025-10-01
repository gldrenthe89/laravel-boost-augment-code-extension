# Laravel Boost - Augment Code Extension

<a href="https://packagist.org/packages/gldrenthe89/laravel-boost-augment-code-extension"><img src="https://img.shields.io/packagist/dt/gldrenthe89/laravel-boost-augment-code-extension?v=1" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/gldrenthe89/laravel-boost-augment-code-extension"><img src="https://img.shields.io/packagist/v/gldrenthe89/laravel-boost-augment-code-extension?v=1" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/gldrenthe89/laravel-boost-augment-code-extension"><img src="https://img.shields.io/packagist/l/gldrenthe89/laravel-boost-augment-code-extension?v=1" alt="License"></a>

## Introduction

A Laravel Composer package that provides [Augment Code](https://www.augmentcode.com/) integration
for [Laravel Boost](https://github.com/laravel/boost).

## Requirements

- PHP 8.1 or higher
- Laravel 10.0 or higher
- Laravel Boost (unreleased. please see Laravel Boost PR [#280](https://github.com/laravel/boost/pull/280))
- Augment Code or Auggie (Augment CLI)

## Installation

### Step 1: Install the Package

Install the package via Composer as a development dependency:

```bash
composer require --dev gldrenthe89/laravel-boost-augment-code-extension
```

### Step 2: Install Laravel Boost

Laravel Boost will auto-detect the Augment Code installation automatically. Run the command below to install Laravel
Boost follow the installation instructions.

```bash
php artisan boost:install
```

## License

Laravel Boost is open-sourced software licensed under the [MIT license](LICENSE.md).
