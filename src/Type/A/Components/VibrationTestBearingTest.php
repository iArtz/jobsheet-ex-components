<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class VibrationTestBearingTest extends Component
{
    protected static array $compatibleWith = [
        MotorType::LV,
        MotorType::TwoSpeed,
        MotorType::SinglePhase,
        MotorType::DC,
    ];

    protected static array $data = [
        'vibration_test_bearing_test' => [
            [], [],
            [
                'incoming_de_v' => '-',
                'incoming_de_h' => '-',
                'incoming_de_a' => '-',
                'incoming_de_g' => '-',
                'final_de_v' => '-',
                'final_de_h' => '-',
                'final_de_a' => '-',
                'final_de_g' => '-',
            ],
            [
                'incoming_nde_v' => '-',
                'incoming_nde_h' => '-',
                'incoming_nde_a' => '-',
                'incoming_nde_g' => '-',
                'final_nde_v' => '-',
                'final_nde_h' => '-',
                'final_nde_a' => '-',
                'final_nde_g' => '-',
            ], [], [], [],
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
                'name' => 'vibration_test_bearing_test_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'vibration_test_bearing_test',
                'title' => 'Vibration Test / Bearing Test'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span(''),
                new Span('INCOMING TEST'),
                new Span('FINAL TEST'),
            ],
            [
                new Span('LOCATION OF MEASUREMENT'),
                new Span('V'),
                new Span('H'),
                new Span('A'),
                new Span('ค่า g'),
                new Span('V'),
                new Span('H'),
                new Span('A'),
                new Span('ค่า g'),
            ],
            [
                new Span('DE'),
                new Input('incoming_de_v'),
                new Input('incoming_de_h'),
                new Input('incoming_de_a'),
                new Input('incoming_de_g'),
                new Input('final_de_v'),
                new Input('final_de_h'),
                new Input('final_de_a'),
                new Input('final_de_g'),
            ],
            [
                new Span('NDE'),
                new Input('incoming_nde_v'),
                new Input('incoming_nde_h'),
                new Input('incoming_nde_a'),
                new Input('incoming_nde_g'),
                new Input('final_nde_v'),
                new Input('final_nde_h'),
                new Input('final_nde_a'),
                new Input('final_nde_g'),
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
                new Input('incoming_id_no', 'Instrument Incoming ID NO.'),
                new Input('final_id_no', 'Final ID NO.')
            ]
        ];
    }
}
