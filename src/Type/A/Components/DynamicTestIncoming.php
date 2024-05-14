<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class DynamicTestIncoming extends Component
{
    protected static array $compatibleWith = [
        MotorType::MV,
    ];

    protected static array $data = [
        'dynamic_test_incoming' => [
            [],
            [],
            [],
            [
                // Incoming
                'incoming_running_test_min' => '-',
                'incoming_marking_supply_r' => '-',
                'incoming_marking_motor_r' => '-',
                'incoming_voltage_supply_value_r-s' => '-',
                'incoming_current_value_r-s' => '-',
                'incoming_speed_1_min' => '-',
                'incoming_shaft' => '-',
                'incoming_de' => '-',
                'incoming_frame' => '-',
                'incoming_nde' => '-',
                'incoming_amb' => '-',
            ],
            [
                // Incoming
                'incoming_marking_supply_s' => '-',
                'incoming_marking_motor_s' => '-',
                'incoming_voltage_supply_value_r-t' => '-',
                'incoming_current_value_r-t' => '-',
            ],
            [
                // Incoming
                'incoming_marking_supply_t' => '-',
                'incoming_marking_motor_t' => '-',
                'incoming_voltage_supply_value_s-t' => '-',
                'incoming_current_value_s-t' => '-',
            ],
            [
                'incoming_id_no_1' => '-',
                'incoming_id_no_2' => '-',
                'incoming_id_no_3' => '-',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'dynamic_test_incoming_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'dynamic_test_incoming',
                'title' => 'Dynamic Test Incoming'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('RUNNING TEST (INCOMING)'),
            ],
            [
                new Span(''),
                new Span(''),
                new Span('Marking'),
                new Span('Voltage Supply (V.)'),
                new Span('Current (A.)'),
                new Span(''),
                new Span('Maximum Temp. °C')
            ],
            [
                new Span('Running Test (min.)'),
                new Span('Motor Test'),
                new Span('Phase'),
                new Span('Supply'),
                new Span('Phase'),
                new Span('Values'),
                new Span('Values'),
                new Span('Speed 1/min.'),
                new Span('SHAFT'),
                new Span('DE'),
                new Span('FRAME'),
                new Span('NDE'),
                new Span('AMB.'),
            ],
            [
                // Incoming
                new Input('incoming_running_test_min', ''),
                new Span('Incoming'),
                new Span('R'),
                new Input('incoming_marking_supply_r', ''),
                new Input('incoming_marking_motor_r', ''),
                new Span('R-S'),
                new Input('incoming_voltage_supply_value_r-s', ''),
                new Input('incoming_current_value_r-s', ''),
                new Input('incoming_speed_1_min', ''),
                new Input('incoming_shaft', ''),
                new Input('incoming_de', ''),
                new Input('incoming_frame', ''),
                new Input('incoming_nde', ''),
                new Input('incoming_amb', ''),
            ],
            [
                // Incoming
                new Span(''),
                new Span('Incoming'),
                new Span('S'),
                new Input('incoming_marking_supply_s', ''),
                new Input('incoming_marking_motor_s', ''),
                new Span('R-T'),
                new Input('incoming_voltage_supply_value_r-t', ''),
                new Input('incoming_current_value_r-t', ''),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
            ],
            [
                // Incoming
                new Span(''),
                new Span('Incoming'),
                new Span('T'),
                new Input('incoming_marking_supply_t', ''),
                new Input('incoming_marking_motor_t', ''),
                new Span('S-T'),
                new Input('incoming_voltage_supply_value_s-t', ''),
                new Input('incoming_current_value_s-t', ''),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
            ],
            [
                new Input('incoming_id_no_1', 'Instrument Incoming ID NO.'),
                new Input('incoming_id_no_2', 'ID NO.'),
                new Input('incoming_id_no_3', 'ID NO.'),
            ]
        ];
    }
}
