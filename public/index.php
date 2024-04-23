<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Jobsheet\Ex\Type\A\Containers\A;

set_error_handler('Jobsheet\Ex\Core\Error::errorHandler');
set_exception_handler('Jobsheet\Ex\Core\Error::exceptionHandler');

$data = [
    'develop' => true,
    'time_resistance_method' => [
        [
            'chart_01' => [ // element name
                'title' => 'Insulation Value(MΩ)', // title show on the left side
                'type' => 'line', // Chart type bar, line, etc.
                'data' => [10, 20, 30, 40, 20, 60, 70, 80, 35, 100],
            ]
        ]
    ]
];

A::setData($data);
A::renderPage();
