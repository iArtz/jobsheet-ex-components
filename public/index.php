<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Jobsheet\Ex\Type\A\Containers\A;

set_error_handler('Jobsheet\Ex\Core\Error::errorHandler');
set_exception_handler('Jobsheet\Ex\Core\Error::exceptionHandler');

$data = [
    'develop' => true,
    'polarization_index' => [
        [],
        [],
        [],
        [
            'insulation_res_incoming_celsius_1' => 'insulation_res_incoming_celsius_1',
            'insulation_res_incoming_celsius_2' => 'insulation_res_incoming_celsius_2',
            'insulation_res_final_celsius_1' => 'insulation_res_final_celsius_1',
            'insulation_res_final_celsius_2' => 'insulation_res_final_celsius_2',
        ],
        [
            'volt' => 'volt',
            'insulation_res_incoming_1_1' => 'insulation_res_incoming_1_1',
            'insulation_res_incoming_1_2' => 'insulation_res_incoming_1_2',
            'insulation_res_final_1_1' => 'insulation_res_final_1_1',
            'insulation_res_final_1_2' => 'insulation_res_final_1_2',
            'insulation_symbol_incoming_1' => 'insulation_symbol_incoming_1',
        ],
        [
            'insulation_res_incoming_2_1' => 'insulation_res_incoming_2_1',
            'insulation_res_incoming_2_2' => 'insulation_res_incoming_2_2',
            'insulation_res_final_2_1' => 'insulation_res_final_2_1',
            'insulation_res_final_2_2' => 'insulation_res_final_2_2',
            'insulation_symbol_incoming_2' => 'insulation_symbol_incoming_2',
        ],
        [
            'insulation_res_incoming_3_1' => 'insulation_res_incoming_3_1',
            'insulation_res_incoming_3_2' => 'insulation_res_incoming_3_2',
            'insulation_res_final_3_1' => 'insulation_res_final_3_1',
            'insulation_res_final_3_2' => 'insulation_res_final_3_2',
            'insulation_symbol_incoming_3' => 'insulation_symbol_incoming_3',
        ],
        [
            'insulation_res_incoming_4_1' => 'insulation_res_incoming_4_1',
            'insulation_res_incoming_4_2' => 'insulation_res_incoming_4_2',
            'insulation_res_final_4_1' => 'insulation_res_final_4_1',
            'insulation_res_final_4_2' => 'insulation_res_final_4_2',
            'insulation_symbol_incoming_4' => 'insulation_symbol_incoming_4',
        ],
        [
            'insulation_res_incoming_5_1' => 'insulation_res_incoming_5_1',
            'insulation_res_incoming_5_2' => 'insulation_res_incoming_5_2',
            'insulation_res_final_5_1' => 'insulation_res_final_5_1',
            'insulation_res_final_5_2' => 'insulation_res_final_5_2',
        ],
        [
            'insulation_res_incoming_6_1' => 'insulation_res_incoming_6_1',
            'insulation_res_incoming_6_2' => 'insulation_res_incoming_6_2',
            'insulation_res_final_6_1' => 'insulation_res_final_6_1',
            'insulation_res_final_6_2' => 'insulation_res_final_6_2',
        ],
        [
            'insulation_res_incoming_7_1' => 'insulation_res_incoming_7_1',
            'insulation_res_incoming_7_2' => 'insulation_res_incoming_7_2',
            'insulation_res_final_7_1' => 'insulation_res_final_7_1',
            'insulation_res_final_7_2' => 'insulation_res_final_7_2',
        ],
        [
            'insulation_res_incoming_8_1' => 'insulation_res_incoming_8_1',
            'insulation_res_incoming_8_2' => 'insulation_res_incoming_8_2',
            'insulation_res_final_8_1' => 'insulation_res_final_8_1',
            'insulation_res_final_8_2' => 'insulation_res_final_8_2',
        ],
        [
            'insulation_res_incoming_9_1' => 'insulation_res_incoming_9_1',
            'insulation_res_incoming_9_2' => 'insulation_res_incoming_9_2',
            'insulation_res_final_9_1' => 'insulation_res_final_9_1',
            'insulation_res_final_9_2' => 'insulation_res_final_9_2',
        ],
        [
            'insulation_res_incoming_10_1' => 'insulation_res_incoming_10_1',
            'insulation_res_incoming_10_2' => 'insulation_res_incoming_10_2',
            'insulation_res_final_10_1' => 'insulation_res_final_10_1',
            'insulation_res_final_10_2' => 'insulation_res_final_10_2',
        ]
    ]
];

A::setData($data);
A::renderPage();
