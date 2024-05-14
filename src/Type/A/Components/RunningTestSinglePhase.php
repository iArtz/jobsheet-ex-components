<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class RunningTestSinglePhase extends RunningTest
{
    protected static array $compatibleWith = [
        MotorType::SinglePhase,
    ];

    protected static array $data = [
        'running_test_single_phase' => [
            [], [], [], [],
            [
                // Incoming
                'incoming_running_test_min' => '-',
                'incoming_voltage_supply_value' => '-',
                'incoming_current_value' => '-',
                'incoming_speed_1_min' => '-',
                'incoming_shaft' => '-',
                'incoming_de' => '-',
                'incoming_frame' => '-',
                'incoming_nde' => '-',
                'incoming_amb' => '-',
            ],
            [
                // Final
                'final_running_test_min' => '-',
                'final_voltage_supply_value' => '-',
                'final_current_value' => '-',
                'final_speed_1_min' => '-',
                'final_shaft' => '-',
                'final_de' => '-',
                'final_frame' => '-',
                'final_nde' => '-',
                'final_amb' => '-',
            ],
            [
                'incoming_id_no_1' => 'Instrument Incoming ID NO.',
                'incoming_id_no_2' => 'ID NO.',
                'incoming_id_no_3' => 'ID NO.',
            ],
            [
                'final_id_no_1' => 'Instrument Final ID NO.',
                'final_id_no_2' => 'ID NO.',
                'final_id_no_3' => 'ID NO.',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'running_test_single_phase_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'running_test_single_phase',
                'title' => 'Dynamic Test'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('RUNNING TEST'),
            ],
            [
                new Span(''),
                new Span(''),
                new Span('Maximum Temp. °C')
            ],
            [
                new Span('Running test (min)'),
                new Span('Motor Test'),
                new Span('Voltage Supply (V.)'),
                new Span('Current (A.)'),
                new Span('Speed (1/min.)'),
                new Span('SHAFT'),
                new Span('DE'),
                new Span('FRAME'),
                new Span('NDE'),
                new Span('AMB.'),
            ],
            [],
            [
                // Incoming
                new Input('incoming_running_test_min', ''),
                new Span('Incoming'),
                new Input('incoming_voltage_supply_value', ''),
                new Input('incoming_current_value', ''),
                new Input('incoming_speed_1_min', ''),
                new Input('incoming_shaft', ''),
                new Input('incoming_de', ''),
                new Input('incoming_frame', ''),
                new Input('incoming_nde', ''),
                new Input('incoming_amb', ''),
            ],
            [
                // Final
                new Input('final_running_test_min', ''),
                new Span('Final'),
                new Input('final_voltage_supply_value', ''),
                new Input('final_current_value', ''),
                new Input('final_speed_1_min', ''),
                new Input('final_shaft', ''),
                new Input('final_de', ''),
                new Input('final_frame', ''),
                new Input('final_nde', ''),
                new Input('final_amb', ''),
            ],
            [
                new Input('incoming_id_no_1', 'Instrument Incoming ID NO.'),
                new Input('incoming_id_no_2', 'ID NO.'),
                new Input('incoming_id_no_3', 'ID NO.'),
            ],
            [
                new Input('final_id_no_1', 'Instrument Final ID NO.'),
                new Input('final_id_no_2', 'ID NO.'),
                new Input('final_id_no_3', 'ID NO.'),
            ]
        ];
    }
}
