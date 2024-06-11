# Jobsheet Ex Components

## Installation

This project using composer.

`$ composer require iartz/jobsheet-ex-components`

Demo setup steps

`$ cp -r ./vendor/iartz/jobsheet-ex-components/public .`

`$ cp -r ./vendor/iartz/jobsheet-ex-components/.env.example ./.env`

`$ ENV_FILE=.env`

`$ export $(egrep -v '^#' $ENV_FILE | xargs)`

`$ php -S localhost:8081 -t public`

or using setup script

`$ chmod +x ./vendor/iartz/jobsheet-ex-components/tests/setup.sh`

`$ ./vendor/iartz/jobsheet-ex-components/tests/setup.sh`

## Usage

```php
<?php

// Import autoload
require_once dirname(__DIR__) . '/vendor/autoload.php';

// Get All components of Type A
use Jobsheet\Ex\Type\A\Containers\A;
// use Jobsheet\Ex\Classes\Abstracts\MotorType;

set_error_handler('Jobsheet\Ex\Core\Error::errorHandler');
set_exception_handler('Jobsheet\Ex\Core\Error::exceptionHandler');

$data = [
    'develop' => true,
];

A::setData($data);
A::renderPage();

$data = [
    'showAll' => true,
    // 'develop' => true,
    // 'debug' => true,
    // 'motorType' => MotorType::DC,
];

A::setData($data);
A::renderPage();
```
