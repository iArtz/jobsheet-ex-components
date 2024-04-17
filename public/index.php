<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Type\A\Containers\A;
use Jobsheet\Ex\Utils\Helper;

$data = [
    'motor_type' => MotorType::LV,
    'debug' => true
];
A::setData(Helper::arrayToObject($data));
A::renderPage();
