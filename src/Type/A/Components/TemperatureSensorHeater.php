<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class TemperatureSensorHeater extends Component
{
    protected static array $compatibleWith = [
        MotorType::DC,
        MotorType::LV,
        MotorType::MV,
        MotorType::TwoSpeed
    ];

    protected static array $data = [
        'temperature_sensor_heater' => [
            [],
            [],
            [
                'temperature_incoming_cnnt_no_de_1' => '-',
                'temperature_incoming_cnnt_no_de_2' => '-',
                'temperature_incoming_cnnt_no_nde_1' => '-',
                'temperature_incoming_cnnt_no_nde_2' => '-',
                'temp_sensor_type' => '-',

                'heater_incoming_cnnt_no_1_1' => '-',
                'heater_incoming_cnnt_no_1_2' => '-',
                'heater_incoming_cnnt_no_2_1' => '-',
                'heater_incoming_cnnt_no_2_2' => '-',
            ],
            [
                'temperature_incoming_resistance_1' => '-',
                'temperature_incoming_resistance_2' => '-',

                'heater_incoming_resistance_1' => '-',
                'heater_incoming_resistance_2' => '-',
            ],
            [
                'temperature_final_cnnt_no_de_1' => '-',
                'temperature_final_cnnt_no_de_2' => '-',
                'temperature_final_cnnt_no_nde_1' => '-',
                'temperature_final_cnnt_no_nde_2' => '-',

                'heater_final_cnnt_no_1_1' => '-',
                'heater_final_cnnt_no_1_2' => '-',
                'heater_final_cnnt_no_2_1' => '-',
                'heater_final_cnnt_no_2_2' => '-',
            ],
            [
                'temperature_final_resistance_1' => '-',
                'temperature_final_resistance_2' => '-',

                'heater_final_resistance_1' => '-',
                'heater_final_resistance_2' => '-',
            ],
            [
                'temperature_incoming_no_id' => '-',
                'temperature_final_no_id' => '-',
                'heater_incoming_no_id' => '-',
                'heater_final_no_id' => '-',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'temperature_sensor_heater_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'temperature_sensor_heater',
                'title' => 'Temperature Sensor Heater'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('TEMPERATURE SENSOR (Bearing)'),
                new Span('HEATER')
            ],
            [
                new Span('Location'),
                new Span('DE'),
                new Span('NDE'),
                new Span('Type'),
                new Span('Unit No.'),
                new Span('1'),
                new Span('2')
            ],
            [
                new Span('Incoming', ['mr-2']),
                new Span('Cnnt. No.'),
                new Input('temperature_incoming_cnnt_no_de_1'),
                new Input('temperature_incoming_cnnt_no_de_2'),
                new Input('temperature_incoming_cnnt_no_nde_1'),
                new Input('temperature_incoming_cnnt_no_nde_2'),
                new Input('temp_sensor_type'),

                new Span('Incoming', ['mr-2']),
                new Span('Cnnt. No.'),
                new Input('heater_incoming_cnnt_no_1_1'),
                new Input('heater_incoming_cnnt_no_1_2'),
                new Input('heater_incoming_cnnt_no_2_1'),
                new Input('heater_incoming_cnnt_no_2_2'),
            ],
            [
                new Span('', ['w-full']),
                new Span('Resistance (Ω)'),
                new Input('temperature_incoming_resistance_1'),
                new Input('temperature_incoming_resistance_2'),
                new Span('', ['w-full']),

                new Span('', ['w-full']),
                new Span('Resistance (Ω)'),
                new Input('heater_incoming_resistance_1'),
                new Input('heater_incoming_resistance_2'),
                new Span('', ['w-full']),
            ],
            [
                new Span('Final', ['mr-2']),
                new Span('Cnnt. No.'),
                new Input('temperature_final_cnnt_no_de_1'),
                new Input('temperature_final_cnnt_no_de_2'),
                new Input('temperature_final_cnnt_no_nde_1'),
                new Input('temperature_final_cnnt_no_nde_2'),

                new Span('Final', ['mr-2']),
                new Span('Cnnt. No.'),
                new Input('heater_final_cnnt_no_1_1'),
                new Input('heater_final_cnnt_no_1_2'),
                new Input('heater_final_cnnt_no_2_1'),
                new Input('heater_final_cnnt_no_2_2'),
            ],
            [
                new Span('', ['w-full']),
                new Span('Resistance (Ω)'),
                new Input('temperature_final_resistance_1'),
                new Input('temperature_final_resistance_2'),
                new Span('', ['w-full']),

                new Span('', ['w-full']),
                new Span('Resistance (Ω)'),
                new Input('heater_final_resistance_1'),
                new Input('heater_final_resistance_2'),
                new Span('', ['w-full']),
            ],
            [
                new Input('temperature_incoming_no_id', 'Instrument Incoming ID NO.'),
                new Input('temperature_final_no_id', 'Final ID NO.'),
                new Input('heater_incoming_no_id', 'Instrument Incoming ID NO.'),
                new Input('heater_final_no_id', 'Final ID NO.'),
            ]
        ];
    }
}
