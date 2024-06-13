<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Type\A\Containers\A;

set_error_handler('Jobsheet\Ex\Core\Error::errorHandler');
set_exception_handler('Jobsheet\Ex\Core\Error::exceptionHandler');

// $json = file_get_contents('http://localhost/api/ex/1');

// $data = json_decode($json, true);

$data['showAll'] = true;

A::setData($data);
A::renderPage();
