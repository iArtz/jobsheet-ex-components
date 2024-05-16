<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class VibrationTestBearingTestIncomingMV extends VibrationTestBearingTest
{
    protected static array $compatibleWith = [
        MotorType::MV,
    ];

    protected static array $data = [
        'vibration_test_bearing_test_incoming_mv' => [
            [], [],
            [
                'incoming_de_v' => '-',
                'incoming_de_h' => '-',
                'incoming_de_a' => '-',
                'incoming_de_g' => '-',
            ],
            [
                'incoming_nde_v' => '-',
                'incoming_nde_h' => '-',
                'incoming_nde_a' => '-',
                'incoming_nde_g' => '-',
            ], [], [], [],
            [
                'incoming_id_no_1' => '-',
                'incoming_id_no_2' => '-'
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'vibration_test_bearing_test_incoming_mv_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'vibration_test_bearing_test_incoming_mv',
                'title' => 'Vibration Test / Bearing Test (INCOMING)'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span(''),
                new Span('Vibration Test (mm./s.)'),
                new Span('Bearing Test'),
            ],
            [
                new Span('LOCATION OF MEASUREMENT'),
                new Span('V'),
                new Span('H'),
                new Span('A'),
                new Span('ค่า g'),
            ],
            [
                new Span('DE'),
                new Input('incoming_de_v', ''),
                new Input('incoming_de_h', ''),
                new Input('incoming_de_a', ''),
                new Input('incoming_de_g', ''),
            ],
            [
                new Span('NDE'),
                new Input('incoming_nde_v', ''),
                new Input('incoming_nde_h', ''),
                new Input('incoming_nde_a', ''),
                new Input('incoming_nde_g', ''),
            ],
            [
                new Span(''),
                new Span('According to ISO 10816-1 Limits (mm/s.)'),
                new Span('Bearing')
            ],
            [
                new Span('Acceptable'),
                new Span('<15kW.'),
                new Span('15-75kW.'),
                new Span('> 75 kW. Rigid Foundation'),
                new Span('> 75 kW. Soft Foundation'),
                new Span('g RMS.')
            ],
            [
                new Span('Recommend'),
                new Span('< = 1.8'),
                new Span('< = 2.8'),
                new Span('< = 4.5'),
                new Span('< = 7.1'),
                new Span('< = 0.5')
            ],
            [
                new Input('incoming_id_no_1', 'Instrument Incoming ID NO.'),
                new Input('incoming_id_no_2', 'Instrument Incoming ID NO.')
            ]
        ];
    }
}
