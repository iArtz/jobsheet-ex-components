<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class DynamicTestFinal extends Component
{
    protected static array $compatibleWith = [
        MotorType::MV,
    ];

    protected static array $data = [

        'dynamic_test_final' => [
            [],
            [],
            [],
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
                'final_marking_supply_s' => '-',
                'final_marking_motor_s' => '-',
                'final_voltage_supply_value_r-t' => '-',
                'final_current_value_r-t' => '-',
            ],
            [
                // Final
                'final_marking_supply_t' => '-',
                'final_marking_motor_t' => '-',
                'final_voltage_supply_value_s-t' => '-',
                'final_current_value_s-t' => '-',
            ],
            [
                'final_id_no_1' => '-',
                'final_id_no_2' => '-',
                'final_id_no_3' => '-',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'dynamic_test_final_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'dynamic_test_final',
                'title' => 'Dynamic Test Final'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('RUNNING TEST (FINAL)'),
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
            [
                new Input('final_id_no_1', 'Instrument Final ID NO.'),
                new Input('final_id_no_2', 'ID NO.'),
                new Input('final_id_no_3', 'ID NO.'),
            ]
        ];
    }
}
