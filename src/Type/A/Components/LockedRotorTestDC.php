<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class LockedRotorTestDC extends LockedRotorTest
{
    protected static array $compatibleWith = [
        MotorType::DC,
    ];

    protected static array $data = [
        'locked_rotor_dc_test' => [
            [],
            [
                // Incoming
                'incoming_application' => true,
                'incoming_na' => true,
                // Final
                'final_application' => true,
                'final_na' => true,
            ],
            [

                'incoming_id_no_1' => 'Instrument Incoming ID No.',
                'incoming_id_no_2' => 'ID No.',
                'final_id_no_1' => 'Instrument final ID No.',
                'final_id_no_2' => 'ID No.',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'locked_rotor_dc_test_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'locked_rotor_dc_test',
                'title' => 'LOCKED ROTOR TEST'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('Lock rotor test : '),
                new Span('INCOMING'),
                new Span('FINAL')
            ],
            [
                // Incoming
                new Span(''),
                new Input('incoming_application', 'Application', 'checkbox-l'),
                new Input('incoming_na', 'N/A', 'checkbox-l'),
                // Final
                new Input('final_application', 'Application', 'checkbox-l'),
                new Input('final_na', 'N/A', 'checkbox-l'),
            ],
            [
                new Input('incoming_id_no_1', 'Instrument Incoming ID No.'),
                new Input('incoming_id_no_2', 'ID No.'),
                new Input('final_id_no_1', 'Instrument final ID No.'),
                new Input('final_id_no_2', 'ID No.'),
            ]
        ];
    }
}
