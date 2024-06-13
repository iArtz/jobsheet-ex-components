<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Type\A\Containers\A;
use Jobsheet\Ex\Utils\Helper;

set_error_handler('Jobsheet\Ex\Core\Error::errorHandler');
set_exception_handler('Jobsheet\Ex\Core\Error::exceptionHandler');

$url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/api/ex/' . Helper::randomString();
$context = stream_context_create([
    'ssl' => [
        'verify_peer' => false,
    ]
]);

$json = file_get_contents($url, false, $context);
$data = json_decode($json, true);

$data['showAll'] = true;

A::setData($data);
A::renderPage();
