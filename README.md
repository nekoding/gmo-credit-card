# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nekoding/gmo-creditcard.svg?style=flat-square)](https://packagist.org/packages/nekoding/gmo-creditcard)
[![Total Downloads](https://img.shields.io/packagist/dt/nekoding/gmo-creditcard.svg?style=flat-square)](https://packagist.org/packages/nekoding/gmo-creditcard)
![GitHub Actions](https://github.com/nekoding/gmo-creditcard/actions/workflows/main.yml/badge.svg)

GMOCreditCard Package is simple package to handle Http Request to GMO Payment Gateway Endpoint for Laravel App. This package right now only support for Credit Card Method. if you want use another payment method you can install this package [https://github.com/nekoding/gmophp](https://github.com/nekoding/gmophp), unfornately this package not crafted for laravel app so you need to adjust it ( maybe sometime i will rewrite that package ).

## Installation

You can install the package via composer:

```bash
composer require nekoding/gmo-creditcard
```

## Usage

```php

// publish configuration file
php artisan vendor:publish --provider="Nekoding\GmoCreditcard\GmoCreditcardServiceProvider"

// setting GMO Configuration via ENV

// you can call site or shop api like this

// Shop API
$gmo = new GmoCreditCard();
$gmo->useShopApi()->entryTransaction([
    // check gmo params for this api
]);


// Site API
$gmo = new GmoCreditCard();
$gmo->useSiteApi()->saveMember([
    // check gmo params for this api
]);

// or you can use facade like this
GmoCreditCardFacade::useShopApi()->entryTransaction([
    //
]);

```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email enggartivandi@outlook.com instead of using the issue tracker.

## Credits

-   [Enggar Tivandi](https://github.com/nekoding)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
