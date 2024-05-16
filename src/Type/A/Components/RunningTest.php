<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class RunningTest extends Component
{
    protected static array $compatibleWith = [
        MotorType::LV,
    ];

    protected static array $data = [

        'running_test' => [
            [],
            [],
            [],
            [
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
                'incoming_running_test_min' => '-',
                'incoming_marking_supply_s' => '-',
                'incoming_marking_motor_s' => '-',
                'incoming_voltage_supply_value_r-t' => '-',
                'incoming_current_value_r-t' => '-',
                'incoming_shaft' => '-',
                'incoming_de' => '-',
                'incoming_frame' => '-',
                'incoming_nde' => '-',
                'incoming_amb' => '-',
            ],
            [
                // Incoming
                'incoming_running_test_min' => '-',
                'incoming_marking_supply_t' => '-',
                'incoming_marking_motor_t' => '-',
                'incoming_voltage_supply_value_s-t' => '-',
                'incoming_current_value_s-t' => '-',
                'incoming_shaft' => '-',
                'incoming_de' => '-',
                'incoming_frame' => '-',
                'incoming_nde' => '-',
                'incoming_amb' => '-',
            ],
            [
                // Final
                'final_running_test_min' => '-',
                'final_marking_supply_r' => '-',
                'final_marking_motor_r' => '-',
                'final_voltage_supply_value_r-s' => '-',
                'final_current_value_r-s' => '-',
                'final_speed_1_min' => '-',
                'final_shaft' => '-',
                'final_de' => '-',
                'final_frame' => '-',
                'final_nde' => '-',
                'final_amb' => '-',
            ],
            [
                // Final
                'final_running_test_min' => '-',
                'final_marking_supply_s' => '-',
                'final_marking_motor_s' => '-',
                'final_voltage_supply_value_r-t' => '-',
                'final_current_value_r-t' => '-',
                'final_shaft' => '-',
                'final_de' => '-',
                'final_frame' => '-',
                'final_nde' => '-',
                'final_amb' => '-',
            ],
            [
                // Final
                'final_running_test_min' => '-',
                'final_marking_supply_t' => '-',
                'final_marking_motor_t' => '-',
                'final_voltage_supply_value_s-t' => '-',
                'final_current_value_s-t' => '-',
                'final_shaft' => '-',
                'final_de' => '-',
                'final_frame' => '-',
                'final_nde' => '-',
                'final_amb' => '-',
            ],
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'running_test_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'running_test',
                'title' => 'RUNNING TEST'
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
                new Input('incoming_running_test_min'),
                new Span('Incoming'),
                new Span('R'),
                new Input('incoming_marking_supply_r'),
                new Input('incoming_marking_motor_r'),
                new Span('R-S'),
                new Input('incoming_voltage_supply_value_r-s'),
                new Input('incoming_current_value_r-s'),
                new Input('incoming_speed_1_min'),
                new Input('incoming_shaft'),
                new Input('incoming_de'),
                new Input('incoming_frame'),
                new Input('incoming_nde'),
                new Input('incoming_amb'),
            ],
            [
                // Incoming
                new Span(''),
                new Span('Incoming'),
                new Span('S'),
                new Input('incoming_marking_supply_s'),
                new Input('incoming_marking_motor_s'),
                new Span('R-T'),
                new Input('incoming_voltage_supply_value_r-t'),
                new Input('incoming_current_value_r-t'),
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
                new Input('incoming_marking_supply_t'),
                new Input('incoming_marking_motor_t'),
                new Span('S-T'),
                new Input('incoming_voltage_supply_value_s-t'),
                new Input('incoming_current_value_s-t'),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
            ],
            [
                // Final
                new Input('final_running_test_min'),
                new Span('Final'),
                new Span('R'),
                new Input('final_marking_supply_r'),
                new Input('final_marking_motor_r'),
                new Span('R-S'),
                new Input('final_voltage_supply_value_r-s'),
                new Input('final_current_value_r-s'),
                new Input('final_speed_1_min'),
                new Input('final_shaft'),
                new Input('final_de'),
                new Input('final_frame'),
                new Input('final_nde'),
                new Input('final_amb'),
            ],
            [
                // Final
                new Span(''),
                new Span('Final'),
                new Span('S'),
                new Input('final_marking_supply_s'),
                new Input('final_marking_motor_s'),
                new Span('R-T'),
                new Input('final_voltage_supply_value_r-t'),
                new Input('final_current_value_r-t'),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
            ],
            [
                // Final
                new Span(''),
                new Span('Final'),
                new Span('T'),
                new Input('final_marking_supply_t'),
                new Input('final_marking_motor_t'),
                new Span('S-T'),
                new Input('final_voltage_supply_value_s-t'),
                new Input('final_current_value_s-t'),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
            ],
        ];
    }
}
