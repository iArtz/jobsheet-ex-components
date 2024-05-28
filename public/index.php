<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Jobsheet\Ex\Type\A\Containers\A;

set_error_handler('Jobsheet\Ex\Core\Error::errorHandler');
set_exception_handler('Jobsheet\Ex\Core\Error::exceptionHandler');

$data = [
    'develop' => true,
];

A::setData($data);
A::renderPage();
