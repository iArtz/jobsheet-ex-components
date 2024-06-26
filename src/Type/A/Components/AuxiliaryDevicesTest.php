<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class AuxiliaryDevicesTest extends Component
{
    protected static array $compatibleWith = [
        MotorType::DC,
        MotorType::LV,
        MotorType::MV,
    ];

    protected static array $data = [
        'auxiliary_devices_test' => [
            [],
            [],
            [
                'incoming_cnnt_no_1_1' => '-',
                'incoming_cnnt_no_1_2' => '-',
                'incoming_cnnt_no_2_1' => '-',
                'incoming_cnnt_no_2_2' => '-',
                'incoming_cnnt_no_3_1' => '-',
                'incoming_cnnt_no_3_2' => '-',
                'incoming_cnnt_no_4_1' => '-',
                'incoming_cnnt_no_4_2' => '-',
                'incoming_cnnt_no_5_1' => '-',
                'incoming_cnnt_no_5_2' => '-',
                'incoming_cnnt_no_6_1' => '-',
                'incoming_cnnt_no_6_2' => '-',
                'incoming_type_1' => '-',
            ],
            [
                'incoming_resistance_1' => '-',
                'incoming_resistance_2' => '-',
                'incoming_resistance_3' => '-',
                'incoming_resistance_4' => '-',
                'incoming_resistance_5' => '-',
                'incoming_resistance_6' => '-',
            ],
            [
                'final_cnnt_no_1_1' => '-',
                'final_cnnt_no_1_2' => '-',
                'final_cnnt_no_2_1' => '-',
                'final_cnnt_no_2_2' => '-',
                'final_cnnt_no_3_1' => '-',
                'final_cnnt_no_3_2' => '-',
                'final_cnnt_no_4_1' => '-',
                'final_cnnt_no_4_2' => '-',
                'final_cnnt_no_5_1' => '-',
                'final_cnnt_no_5_2' => '-',
                'final_cnnt_no_6_1' => '-',
                'final_cnnt_no_6_2' => '-',
                'final_type_1' => '-',
            ],
            [
                'final_resistance_1' => '-',
                'final_resistance_2' => '-',
                'final_resistance_3' => '-',
                'final_resistance_4' => '-',
                'final_resistance_5' => '-',
                'final_resistance_6' => '-',
            ],
            [],
            [],
            [
                'incoming_cnnt_no_7_1' => '-',
                'incoming_cnnt_no_7_2' => '-',
                'incoming_cnnt_no_8_1' => '-',
                'incoming_cnnt_no_8_2' => '-',
                'incoming_cnnt_no_9_1' => '-',
                'incoming_cnnt_no_9_2' => '-',
                'incoming_cnnt_no_10_1' => '-',
                'incoming_cnnt_no_10_2' => '-',
                'incoming_cnnt_no_11_1' => '-',
                'incoming_cnnt_no_11_2' => '-',
                'incoming_cnnt_no_12_1' => '-',
                'incoming_cnnt_no_12_2' => '-',
                'incoming_type_2' => '-',
            ],
            [
                'incoming_resistance_7' => '-',
                'incoming_resistance_8' => '-',
                'incoming_resistance_9' => '-',
                'incoming_resistance_10' => '-',
                'incoming_resistance_11' => '-',
                'incoming_resistance_12' => '-',
            ],
            [
                'final_cnnt_no_7_1' => '-',
                'final_cnnt_no_7_2' => '-',
                'final_cnnt_no_8_1' => '-',
                'final_cnnt_no_8_2' => '-',
                'final_cnnt_no_9_1' => '-',
                'final_cnnt_no_9_2' => '-',
                'final_cnnt_no_10_1' => '-',
                'final_cnnt_no_10_2' => '-',
                'final_cnnt_no_11_1' => '-',
                'final_cnnt_no_11_2' => '-',
                'final_cnnt_no_12_1' => '-',
                'final_cnnt_no_12_2' => '-',
                'final_type_2' => '-',
            ],
            [
                'final_resistance_7' => '-',
                'final_resistance_8' => '-',
                'final_resistance_9' => '-',
                'final_resistance_10' => '-',
                'final_resistance_11' => '-',
                'final_resistance_12' => '-',
            ],
            [
                'incoming_id_no' => '-',
                'final_id_no' => '-'
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'auxiliary_devices_test_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'auxiliary_devices_test',
                'title' => 'Auxiliary Devices Test'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('TEMPERATURE SENSOR (Stator)'),
            ],
            [
                new Span('Element Item'),
                new Span('1'),
                new Span('2'),
                new Span('3'),
                new Span('4'),
                new Span('5'),
                new Span('6'),
                new Span('Type'),
            ],
            [
                new Span('Incoming', ['mr-2']),
                new Span('Cnnt. No.'),
                new Input('incoming_cnnt_no_1_1'),
                new Input('incoming_cnnt_no_1_2'),
                new Input('incoming_cnnt_no_2_1'),
                new Input('incoming_cnnt_no_2_2'),
                new Input('incoming_cnnt_no_3_1'),
                new Input('incoming_cnnt_no_3_2'),
                new Input('incoming_cnnt_no_4_1'),
                new Input('incoming_cnnt_no_4_2'),
                new Input('incoming_cnnt_no_5_1'),
                new Input('incoming_cnnt_no_5_2'),
                new Input('incoming_cnnt_no_6_1'),
                new Input('incoming_cnnt_no_6_2'),
                new Input('incoming_type_1')
            ],
            [
                new Span('', ['w-full']),
                new Span('Resistance (Ω)'),
                new Input('incoming_resistance_1'),
                new Input('incoming_resistance_2'),
                new Input('incoming_resistance_3'),
                new Input('incoming_resistance_4'),
                new Input('incoming_resistance_5'),
                new Input('incoming_resistance_6'),
            ],
            [
                new Span('Final', ['mr-2']),
                new Span('Cnnt. No.'),
                new Input('final_cnnt_no_1_1'),
                new Input('final_cnnt_no_1_2'),
                new Input('final_cnnt_no_2_1'),
                new Input('final_cnnt_no_2_2'),
                new Input('final_cnnt_no_3_1'),
                new Input('final_cnnt_no_3_2'),
                new Input('final_cnnt_no_4_1'),
                new Input('final_cnnt_no_4_2'),
                new Input('final_cnnt_no_5_1'),
                new Input('final_cnnt_no_5_2'),
                new Input('final_cnnt_no_6_1'),
                new Input('final_cnnt_no_6_2'),
                new Input('final_type_1')
            ],
            [
                new Span('', ['w-full']),
                new Span('Resistance (Ω)'),
                new Input('final_resistance_1'),
                new Input('final_resistance_2'),
                new Input('final_resistance_3'),
                new Input('final_resistance_4'),
                new Input('final_resistance_5'),
                new Input('final_resistance_6'),
            ],
            [
                new Span('TEMPERATURE SENSOR (Stator)'),
            ],
            [
                new Span('Element Item'),
                new Span('7'),
                new Span('8'),
                new Span('9'),
                new Span('10'),
                new Span('11'),
                new Span('12'),
                new Span('Type'),
            ],
            [
                new Span('Incoming', ['mr-2']),
                new Span('Cnnt. No.'),
                new Input('incoming_cnnt_no_7_1'),
                new Input('incoming_cnnt_no_7_2'),
                new Input('incoming_cnnt_no_8_1'),
                new Input('incoming_cnnt_no_8_2'),
                new Input('incoming_cnnt_no_9_1'),
                new Input('incoming_cnnt_no_9_2'),
                new Input('incoming_cnnt_no_10_1'),
                new Input('incoming_cnnt_no_10_2'),
                new Input('incoming_cnnt_no_11_1'),
                new Input('incoming_cnnt_no_11_2'),
                new Input('incoming_cnnt_no_12_1'),
                new Input('incoming_cnnt_no_12_2'),
                new Input('incoming_type_2')
            ],
            [
                new Span('', ['w-full']),
                new Span('Resistance (Ω)'),
                new Input('incoming_resistance_7'),
                new Input('incoming_resistance_8'),
                new Input('incoming_resistance_9'),
                new Input('incoming_resistance_10'),
                new Input('incoming_resistance_11'),
                new Input('incoming_resistance_12'),
            ],
            [
                new Span('Final', ['mr-2']),
                new Span('Cnnt. No.'),
                new Input('final_cnnt_no_7_1'),
                new Input('final_cnnt_no_7_2'),
                new Input('final_cnnt_no_8_1'),
                new Input('final_cnnt_no_8_2'),
                new Input('final_cnnt_no_9_1'),
                new Input('final_cnnt_no_9_2'),
                new Input('final_cnnt_no_10_1'),
                new Input('final_cnnt_no_10_2'),
                new Input('final_cnnt_no_11_1'),
                new Input('final_cnnt_no_11_2'),
                new Input('final_cnnt_no_12_1'),
                new Input('final_cnnt_no_12_2'),
                new Input('final_type_2')
            ],
            [
                new Span('', ['w-full']),
                new Span('Resistance (Ω)'),
                new Input('final_resistance_7'),
                new Input('final_resistance_8'),
                new Input('final_resistance_9'),
                new Input('final_resistance_10'),
                new Input('final_resistance_11'),
                new Input('final_resistance_12'),
            ],
            [
                new Input('incoming_id_no', 'Instrument Incoming ID NO.'),
                new Input('final_id_no', 'Final ID NO.')
            ]
        ];
    }
}
