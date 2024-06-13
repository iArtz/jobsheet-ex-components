<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class DynamicTestDC extends RunningTest
{
    protected static array $compatibleWith = [
        MotorType::DC,
    ];

    protected static array $data = [
        'dynamic_test_dc' => [
            [
                'incoming_time_test_running' => '-',
            ],
            [],
            [],
            [],
            [],
            [
                // Field
                'incoming_field_marking' => '-',
                'incoming_field_supply' => '-',
                'incoming_field_voltage_vdc' => '-',
                'incoming_field_current_adv' => '-',
                'incoming_field_speed_1_min' => '-',
                'incoming_field_shaft' => '-',
                'incoming_field_de' => '-',
                'incoming_field_frame' => '-',
                'incoming_field_nde' => '-',
                'incoming_field_amb' => '-',
            ],
            [
                // Armature
                'incoming_armature_marking' => '-',
                'incoming_armature_supply' => '-',
                'incoming_armature_voltage_vdc' => '-',
                'incoming_armature_current_adv' => '-',
                'incoming_armature_speed_1_min' => '-',
                'incoming_armature_shaft' => '-',
                'incoming_armature_de' => '-',
                'incoming_armature_frame' => '-',
                'incoming_armature_nde' => '-',
                'incoming_armature_amb' => '-',
            ],
            [
                'incoming_id_no_1' => '-',
                'incoming_id_no_2' => '-',
                'incoming_id_no_3' => '-',
            ],
            [
                'final_time_test_running' => '-',
            ],
            [],
            [],
            [],
            [],
            [
                // Field
                'final_field_marking' => '-',
                'final_field_supply' => '-',
                'final_field_voltage_vdc' => '-',
                'final_field_current_adv' => '-',
                'final_field_speed_1_min' => '-',
                'final_field_shaft' => '-',
                'final_field_de' => '-',
                'final_field_frame' => '-',
                'final_field_nde' => '-',
                'final_field_amb' => '-',
            ],
            [
                // Armature
                'final_armature_marking' => '-',
                'final_armature_supply' => '-',
                'final_armature_voltage_vdc' => '-',
                'final_armature_current_adv' => '-',
                'final_armature_speed_1_min' => '-',
                'final_armature_shaft' => '-',
                'final_armature_de' => '-',
                'final_armature_frame' => '-',
                'final_armature_nde' => '-',
                'final_armature_amb' => '-',
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
                'name' => 'dynamic_test_dc_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'dynamic_test_dc',
                'title' => 'Dynamic Test'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Input('incoming_time_test_running', 'Time Test Running'),
                new Span('min.')
            ],
            [
                new Span('RUNNING TEST (Incoming)'),
            ],
            [
                new Span(''),
                new Span(''),
                new Span('Maximum Temp. °C')
            ],
            [
                new Span('Terminal'),
                new Span('Marking'),
                new Span('Supply'),
                new Span('Voltage (Vdc.)'),
                new Span('Current (Adc.)'),
                new Span('Speed(1/min.)'),
                new Span('SHAFT'),
                new Span('DE'),
                new Span('FRAME'),
                new Span('NDE'),
                new Span('AMB.'),
            ],
            [],
            [
                // Field
                new Span('Field'),
                new Input('incoming_field_marking'),
                new Input('incoming_field_supply'),
                new Input('incoming_field_voltage_vdc'),
                new Input('incoming_field_current_adv'),
                new Input('incoming_field_speed_1_min'),
                new Input('incoming_field_shaft'),
                new Input('incoming_field_de'),
                new Input('incoming_field_frame'),
                new Input('incoming_field_nde'),
                new Input('incoming_field_amb'),
            ],
            [
                // Armature
                new Span('Armature'),
                new Input('incoming_armature_marking'),
                new Input('incoming_armature_supply'),
                new Input('incoming_armature_voltage_vdc'),
                new Input('incoming_armature_current_adv'),
                new Input('incoming_armature_speed_1_min'),
                new Input('incoming_armature_shaft'),
                new Input('incoming_armature_de'),
                new Input('incoming_armature_frame'),
                new Input('incoming_armature_nde'),
                new Input('incoming_armature_amb'),
            ],
            [
                new Input('incoming_id_no_1', 'Instrument Incoming ID NO.'),
                new Input('incoming_id_no_2', 'ID NO.'),
                new Input('incoming_id_no_3', 'ID NO.'),
            ],
            [
                new Input('final_time_test_running', 'Time Test Running'),
                new Span('min.')
            ],
            [
                new Span('RUNNING TEST (Final)'),
            ],
            [
                new Span(''),
                new Span(''),
                new Span('Maximum Temp. °C')
            ],
            [
                new Span('Terminal'),
                new Span('Marking'),
                new Span('Supply'),
                new Span('Voltage (Vdc.)'),
                new Span('Current (Adc.)'),
                new Span('Speed(1/min.)'),
                new Span('SHAFT'),
                new Span('DE'),
                new Span('FRAME'),
                new Span('NDE'),
                new Span('AMB.'),
            ],
            [],
            [
                // Field
                new Span('Field'),
                new Input('final_field_marking'),
                new Input('final_field_supply'),
                new Input('final_field_voltage_vdc'),
                new Input('final_field_current_adv'),
                new Input('final_field_speed_1_min'),
                new Input('final_field_shaft'),
                new Input('final_field_de'),
                new Input('final_field_frame'),
                new Input('final_field_nde'),
                new Input('final_field_amb'),
            ],
            [
                // Armature
                new Span('Armature'),
                new Input('final_armature_marking'),
                new Input('final_armature_supply'),
                new Input('final_armature_voltage_vdc'),
                new Input('final_armature_current_adv'),
                new Input('final_armature_speed_1_min'),
                new Input('final_armature_shaft'),
                new Input('final_armature_de'),
                new Input('final_armature_frame'),
                new Input('final_armature_nde'),
                new Input('final_armature_amb'),
            ],
            [
                new Input('final_id_no_1', 'Instrument Final ID NO.'),
                new Input('final_id_no_2', 'ID NO.'),
                new Input('final_id_no_3', 'ID NO.'),
            ]
        ];
    }
}
