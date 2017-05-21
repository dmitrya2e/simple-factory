# Da2e SimpleFactory

[![Build Status](https://travis-ci.org/dmitrya2e/simple-factory.svg?branch=master)](https://travis-ci.org/dmitrya2e/simple-factory)

SimpleFactory is a mini-package implementing Simple Factory design pattern and providing its functionality.

## How to use

```php
<?php

use Da2e\SimpleFactory\SimpleFactory;

$factory = new SimpleFactory();
$factory->create(TheObjectYouNeedToCreate::class, ['optional', 'array', 'of', 'constructor', 'args']);
```

The order of the constructor arguments matters!

To automate the process of creating homogeneous objects with the same constructor arguments, you could simply create a wrapper for the SimpleFactory and pass the required arguments to its constructor, as follows:

```php
<?php

use Da2e\SimpleFactory\SimpleFactory;

class MySimpleFactory extends SimpleFactory
{
    private $dependency;
    
    public function __construct($dependency)
    {
        $this->dependency = $dependency;
    }
    
    /**
     * {@inheritdoc}
     */
    public function create(string $class, array $constructorArgs = [])
    {
        parent::create($class, array_merge([$this->dependency], $constructorArgs));
    }
}

$factory = new MySimpleFactory('foobar');
$factory->create(TheObjectYouNeedToCreate1::class);
$factory->create(TheObjectYouNeedToCreate2::class);
$factory->create(TheObjectYouNeedToCreate3::class);

```

## Software requirements

- PHP >= 7.0

## How to install

```
composer require da2e/simple-factory "1.*"
```

## License

This bundle is under the [MIT license](LICENSE).