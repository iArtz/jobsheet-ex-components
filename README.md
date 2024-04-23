# Jobsheet Ex Components

## Installation

This project using composer.

`$ composer require iartz/jobsheet-ex-components`

## Usage

```php
<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

// Get All components of Type A
use Jobsheet\Ex\Type\A\Containers\A;

$data = [
    'showAll' => true,
    // 'develop' => true,
    // 'debug' => true
];

A::setData($data);
A::renderPage();
```
