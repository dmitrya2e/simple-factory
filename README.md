# Da2e SimpleFactory

[![Build Status](https://travis-ci.org/dmitrya2e/filtration-bundle.svg?branch=dev)](https://travis-ci.org/dmitrya2e/filtration-bundle)

SimpleFactory is a mini-package implementing Simple Factory design pattern and providing its functionality.

## How to use

```php
<?php

use Da2e\SimpleFactory\SimpleFactory;

$factory = new SimpleFactory();
$factory->create(TheObjectYouNeedToCreate::class, ['optional', 'array', 'of', 'constructor', 'args']);
```

The order of the constructor arguments matters!

## Software requirements

- PHP >= 7.0

## How to install

```
composer require da2e/simple-factory "1.*"
```

## License

This bundle is under the [MIT license](LICENSE).