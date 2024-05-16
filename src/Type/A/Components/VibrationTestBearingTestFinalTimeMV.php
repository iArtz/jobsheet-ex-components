<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class VibrationTestBearingTestFinalTimeMV extends VibrationTestBearingTestIncomingMV
{
    protected static array $data = [
        'vibration_test_bearing_test_final_time_mv' => [
            [], [], [], [], [
                'final_time_1' => '-',
                'final_de_v_1' => '-',
                'final_de_h_1' => '-',
                'final_de_a_1' => '-',
                'final_nde_v_1' => '-',
                'final_nde_h_1' => '-',
                'final_nde_a_1' => '-',
                'final_de_g_1' => '-',
                'final_nde_g_1' => '-',
            ],
            [
                'final_time_2' => '-',
                'final_de_v_2' => '-',
                'final_de_h_2' => '-',
                'final_de_a_2' => '-',
                'final_nde_v_2' => '-',
                'final_nde_h_2' => '-',
                'final_nde_a_2' => '-',
                'final_de_g_2' => '-',
                'final_nde_g_2' => '-',
            ],
            [
                'final_time_3' => '-',
                'final_de_v_3' => '-',
                'final_de_h_3' => '-',
                'final_de_a_3' => '-',
                'final_nde_v_3' => '-',
                'final_nde_h_3' => '-',
                'final_nde_a_3' => '-',
                'final_de_g_3' => '-',
                'final_nde_g_3' => '-',
            ],
            [
                'final_time_4' => '-',
                'final_de_v_4' => '-',
                'final_de_h_4' => '-',
                'final_de_a_4' => '-',
                'final_nde_v_4' => '-',
                'final_nde_h_4' => '-',
                'final_nde_a_4' => '-',
                'final_de_g_4' => '-',
                'final_nde_g_4' => '-',
            ],
            [
                'final_time_5' => '-',
                'final_de_v_5' => '-',
                'final_de_h_5' => '-',
                'final_de_a_5' => '-',
                'final_nde_v_5' => '-',
                'final_nde_h_5' => '-',
                'final_nde_a_5' => '-',
                'final_de_g_5' => '-',
                'final_nde_g_5' => '-',
            ],
            [
                'final_time_6' => '-',
                'final_de_v_6' => '-',
                'final_de_h_6' => '-',
                'final_de_a_6' => '-',
                'final_nde_v_6' => '-',
                'final_nde_h_6' => '-',
                'final_nde_a_6' => '-',
                'final_de_g_6' => '-',
                'final_nde_g_6' => '-',
            ],
            [
                'final_acceptable_vibration_test' => '-',
                'final_acceptable_bearing_test' => '-',
            ], [], [],
            [
                'final_id_no' => '-', 'Instrument Incoming ID NO.',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'vibration_test_bearing_test_final_time_mv_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'vibration_test_bearing_test_final_time_mv',
                'title' => 'Vibration Test / Bearing Test (FINAL)'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('FINAL TEST')
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
                new Input('final_time_1'),
                new Input('final_de_v_1'),
                new Input('final_de_h_1'),
                new Input('final_de_a_1'),
                new Input('final_nde_v_1'),
                new Input('final_nde_h_1'),
                new Input('final_nde_a_1'),
                new Input('final_de_g_1'),
                new Input('final_nde_g_1'),
            ],
            [
                new Input('final_time_2'),
                new Input('final_de_v_2'),
                new Input('final_de_h_2'),
                new Input('final_de_a_2'),
                new Input('final_nde_v_2'),
                new Input('final_nde_h_2'),
                new Input('final_nde_a_2'),
                new Input('final_de_g_2'),
                new Input('final_nde_g_2'),
            ],
            [
                new Input('final_time_3'),
                new Input('final_de_v_3'),
                new Input('final_de_h_3'),
                new Input('final_de_a_3'),
                new Input('final_nde_v_3'),
                new Input('final_nde_h_3'),
                new Input('final_nde_a_3'),
                new Input('final_de_g_3'),
                new Input('final_nde_g_3'),
            ],
            [
                new Input('final_time_4'),
                new Input('final_de_v_4'),
                new Input('final_de_h_4'),
                new Input('final_de_a_4'),
                new Input('final_nde_v_4'),
                new Input('final_nde_h_4'),
                new Input('final_nde_a_4'),
                new Input('final_de_g_4'),
                new Input('final_nde_g_4'),
            ],
            [
                new Input('final_time_5'),
                new Input('final_de_v_5'),
                new Input('final_de_h_5'),
                new Input('final_de_a_5'),
                new Input('final_nde_v_5'),
                new Input('final_nde_h_5'),
                new Input('final_nde_a_5'),
                new Input('final_de_g_5'),
                new Input('final_nde_g_5'),
            ],
            [
                new Input('final_time_6'),
                new Input('final_de_v_6'),
                new Input('final_de_h_6'),
                new Input('final_de_a_6'),
                new Input('final_nde_v_6'),
                new Input('final_nde_h_6'),
                new Input('final_nde_a_6'),
                new Input('final_de_g_6'),
                new Input('final_nde_g_6'),
            ],
            [
                new Span(''),
                new Input('final_acceptable_vibration_test'),
                new Input('final_acceptable_bearing_test'),
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
                new Input('final_id_no', 'Instrument Final ID NO.'),
            ]
        ];
    }
}
