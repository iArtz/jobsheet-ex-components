<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class VibrationTestBearingTestIncomingTimeMV extends VibrationTestBearingTestIncomingMV
{
    protected static array $data = [
        'vibration_test_bearing_test_incoming_time_mv' => [
            [], [], [], [], [
                'incoming_time_1' => '-',
                'incoming_de_v_1' => '-',
                'incoming_de_h_1' => '-',
                'incoming_de_a_1' => '-',
                'incoming_nde_v_1' => '-',
                'incoming_nde_h_1' => '-',
                'incoming_nde_a_1' => '-',
                'incoming_de_g_1' => '-',
                'incoming_nde_g_1' => '-',
            ],
            [
                'incoming_time_2' => '-',
                'incoming_de_v_2' => '-',
                'incoming_de_h_2' => '-',
                'incoming_de_a_2' => '-',
                'incoming_nde_v_2' => '-',
                'incoming_nde_h_2' => '-',
                'incoming_nde_a_2' => '-',
                'incoming_de_g_2' => '-',
                'incoming_nde_g_2' => '-',
            ],
            [
                'incoming_time_3' => '-',
                'incoming_de_v_3' => '-',
                'incoming_de_h_3' => '-',
                'incoming_de_a_3' => '-',
                'incoming_nde_v_3' => '-',
                'incoming_nde_h_3' => '-',
                'incoming_nde_a_3' => '-',
                'incoming_de_g_3' => '-',
                'incoming_nde_g_3' => '-',
            ],
            [
                'incoming_time_4' => '-',
                'incoming_de_v_4' => '-',
                'incoming_de_h_4' => '-',
                'incoming_de_a_4' => '-',
                'incoming_nde_v_4' => '-',
                'incoming_nde_h_4' => '-',
                'incoming_nde_a_4' => '-',
                'incoming_de_g_4' => '-',
                'incoming_nde_g_4' => '-',
            ],
            [
                'incoming_time_5' => '-',
                'incoming_de_v_5' => '-',
                'incoming_de_h_5' => '-',
                'incoming_de_a_5' => '-',
                'incoming_nde_v_5' => '-',
                'incoming_nde_h_5' => '-',
                'incoming_nde_a_5' => '-',
                'incoming_de_g_5' => '-',
                'incoming_nde_g_5' => '-',
            ],
            [
                'incoming_time_6' => '-',
                'incoming_de_v_6' => '-',
                'incoming_de_h_6' => '-',
                'incoming_de_a_6' => '-',
                'incoming_nde_v_6' => '-',
                'incoming_nde_h_6' => '-',
                'incoming_nde_a_6' => '-',
                'incoming_de_g_6' => '-',
                'incoming_nde_g_6' => '-',
            ],
            [
                'incoming_acceptable_vibration_test' => '-',
                'incoming_acceptable_bearing_test' => '-',
            ], [], [],
            [
                'incoming_id_no' => '-', 'Instrument Incoming ID NO.',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'vibration_test_bearing_test_incoming_time_mv_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'vibration_test_bearing_test_incoming_time_mv',
                'title' => 'Vibration Test / Bearing Test (INCOMING)'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('INCOMING TEST')
            ],
            [
                new Span('Vibration Test (mm./s.)'),
                new Span('Bearing Test'),
            ],
            [
                new Span('DE (mm./s.)'),
                new Span('NDE (mm./s.)'),
                new Span('DE'),
                new Span('NDE'),
            ],
            [
                new Span('Time (min.)'),
                new Span('V'),
                new Span('H'),
                new Span('A'),
                new Span('V'),
                new Span('H'),
                new Span('A'),
                new Span('ค่า g'),
                new Span('ค่า g'),
            ],
            [
                new Input('incoming_time_1'),
                new Input('incoming_de_v_1'),
                new Input('incoming_de_h_1'),
                new Input('incoming_de_a_1'),
                new Input('incoming_nde_v_1'),
                new Input('incoming_nde_h_1'),
                new Input('incoming_nde_a_1'),
                new Input('incoming_de_g_1'),
                new Input('incoming_nde_g_1'),
            ],
            [
                new Input('incoming_time_2'),
                new Input('incoming_de_v_2'),
                new Input('incoming_de_h_2'),
                new Input('incoming_de_a_2'),
                new Input('incoming_nde_v_2'),
                new Input('incoming_nde_h_2'),
                new Input('incoming_nde_a_2'),
                new Input('incoming_de_g_2'),
                new Input('incoming_nde_g_2'),
            ],
            [
                new Input('incoming_time_3'),
                new Input('incoming_de_v_3'),
                new Input('incoming_de_h_3'),
                new Input('incoming_de_a_3'),
                new Input('incoming_nde_v_3'),
                new Input('incoming_nde_h_3'),
                new Input('incoming_nde_a_3'),
                new Input('incoming_de_g_3'),
                new Input('incoming_nde_g_3'),
            ],
            [
                new Input('incoming_time_4'),
                new Input('incoming_de_v_4'),
                new Input('incoming_de_h_4'),
                new Input('incoming_de_a_4'),
                new Input('incoming_nde_v_4'),
                new Input('incoming_nde_h_4'),
                new Input('incoming_nde_a_4'),
                new Input('incoming_de_g_4'),
                new Input('incoming_nde_g_4'),
            ],
            [
                new Input('incoming_time_5'),
                new Input('incoming_de_v_5'),
                new Input('incoming_de_h_5'),
                new Input('incoming_de_a_5'),
                new Input('incoming_nde_v_5'),
                new Input('incoming_nde_h_5'),
                new Input('incoming_nde_a_5'),
                new Input('incoming_de_g_5'),
                new Input('incoming_nde_g_5'),
            ],
            [
                new Input('incoming_time_6'),
                new Input('incoming_de_v_6'),
                new Input('incoming_de_h_6'),
                new Input('incoming_de_a_6'),
                new Input('incoming_nde_v_6'),
                new Input('incoming_nde_h_6'),
                new Input('incoming_nde_a_6'),
                new Input('incoming_de_g_6'),
                new Input('incoming_nde_g_6'),
            ],
            [
                new Span(''),
                new Input('incoming_acceptable_vibration_test'),
                new Input('incoming_acceptable_bearing_test'),
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
                new Input('incoming_id_no', 'Instrument Incoming ID NO.'),
            ]
        ];
    }
}
