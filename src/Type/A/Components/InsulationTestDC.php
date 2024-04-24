<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class InsulationTestDC extends Component
{
    protected static array $compatibleWith = [
        MotorType::DC
    ];

    protected static array $data = [
        'insulation_test' => [
            [],
            [],
            [],
            [
                'insulation_incoming_volt' => '1',
                'insulation_incoming_1_min_1' => '1',
                'insulation_final_1_min_1' => '1',
                'insulation_incoming_10_min_1' => '1',
                'insulation_final_10_min_1' => '1',
                'insulation_incoming_pi_1' => '1',
                'insulation_final_pi_1' => '1',
            ],
            [
                'insulation_incoming_1_min_2' => '1',
                'insulation_final_1_min_2' => '1',
                'insulation_incoming_10_min_2' => '1',
                'insulation_final_10_min_2' => '1',
                'insulation_incoming_pi_2' => '1',
                'insulation_final_pi_2' => '1',
            ],
            [
                'insulation_incoming_1_min_3' => '1',
                'insulation_final_1_min_3' => '1',
                'insulation_incoming_10_min_3' => '1',
                'insulation_final_10_min_3' => '1',
                'insulation_incoming_pi_3' => '1',
                'insulation_final_pi_3' => '1',
            ],
            [
                'insulation_incoming_1_min_4' => '1',
                'insulation_final_1_min_4' => '1',
                'insulation_incoming_10_min_4' => '1',
                'insulation_final_10_min_4' => '1',
                'insulation_incoming_pi_4' => '1',
                'insulation_final_pi_4' => '1',
            ],
            [
                'insulation_incoming_1_min_5' => '1',
                'insulation_final_1_min_5' => '1',
                'insulation_incoming_10_min_5' => '1',
                'insulation_final_10_min_5' => '1',
                'insulation_incoming_pi_5' => '1',
                'insulation_final_pi_5' => '1',
            ],
            [
                'insulation_incoming_1_min_6' => '1',
                'insulation_final_1_min_6' => '1',
                'insulation_incoming_10_min_6' => '1',
                'insulation_final_10_min_6' => '1',
                'insulation_incoming_pi_6' => '1',
                'insulation_final_pi_6' => '1',
            ],
            [
                'insulation_incoming_1_min_7' => '1',
                'insulation_final_1_min_7' => '1',
                'insulation_incoming_10_min_7' => '1',
                'insulation_final_10_min_7' => '1',
                'insulation_incoming_pi_7' => '1',
                'insulation_final_pi_7' => '1',
            ],
            [],
            [
                'insulation_incoming_id_no' => 'Instrument Incoming ID NO.',
                'insulation_final_id_no' => 'Final ID NO.',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'insulation_test_from',
                'title' => '',
                'action' => '/api/ex/save',
            ],
            'fieldset' => [
                'name' => 'insulation_test',
                'title' => 'Insulation Test'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('INSULATION TEST')
            ],
            [
                new Span('At 1min.', ['!pl-[30%]']),
                new Span('At 10min.'),
                new Span('PI'),
            ],
            [
                new Span('Volt (Vde.)'),
                new Span('Terminal'),
                new Span('Incoming'),
                new Span('Final'),
                new Span('Incoming'),
                new Span('Final'),
                new Span('Incoming'),
                new Span('Final'),
            ],
            [
                new Input('insulation_incoming_volt', ''),
                new Span('Shut Field - Earth'),
                new Input('insulation_incoming_1_min_1', ''),
                new Input('insulation_final_1_min_1', ''),
                new Input('insulation_incoming_10_min_1', ''),
                new Input('insulation_final_10_min_1', ''),
                new Input('insulation_incoming_pi_1', ''),
                new Input('insulation_final_pi_1', ''),
            ],
            [
                new Span('', ['w-full']),
                new Span('Series Field - Earth'),
                new Input('insulation_incoming_1_min_2', ''),
                new Input('insulation_final_1_min_2', ''),
                new Input('insulation_incoming_10_min_2', ''),
                new Input('insulation_final_10_min_2', ''),
                new Input('insulation_incoming_pi_2', ''),
                new Input('insulation_final_pi_2', ''),
            ],
            [
                new Span('', ['w-full']),
                new Span('Interpole Field - Earth'),
                new Input('insulation_incoming_1_min_3', ''),
                new Input('insulation_final_1_min_3', ''),
                new Input('insulation_incoming_10_min_3', ''),
                new Input('insulation_final_10_min_3', ''),
                new Input('insulation_incoming_pi_3', ''),
                new Input('insulation_final_pi_3', ''),
            ],
            [
                new Span('', ['w-full']),
                new Span('Compensate Field - Earth'),
                new Input('insulation_incoming_1_min_4', ''),
                new Input('insulation_final_1_min_4', ''),
                new Input('insulation_incoming_10_min_4', ''),
                new Input('insulation_final_10_min_4', ''),
                new Input('insulation_incoming_pi_4', ''),
                new Input('insulation_final_pi_4', ''),
            ],
            [
                new Span('', ['w-full']),
                new Span('Armature Field - Earth'),
                new Input('insulation_incoming_1_min_5', ''),
                new Input('insulation_final_1_min_5', ''),
                new Input('insulation_incoming_10_min_5', ''),
                new Input('insulation_final_10_min_5', ''),
                new Input('insulation_incoming_pi_5', ''),
                new Input('insulation_final_pi_5', ''),
            ],
            [
                new Span('', ['w-full']),
                new Span('Shunt Field - Interpole'),
                new Input('insulation_incoming_1_min_6', ''),
                new Input('insulation_final_1_min_6', ''),
                new Input('insulation_incoming_10_min_6', ''),
                new Input('insulation_final_10_min_6', ''),
                new Input('insulation_incoming_pi_6', ''),
                new Input('insulation_final_pi_6', ''),
            ],
            [
                new Span('', ['w-full']),
                new Span('', ['w-full']),
                new Input('insulation_incoming_1_min_7', ''),
                new Input('insulation_final_1_min_7', ''),
                new Input('insulation_incoming_10_min_7', ''),
                new Input('insulation_final_10_min_7', ''),
                new Input('insulation_incoming_pi_7', ''),
                new Input('insulation_final_pi_7', ''),
            ],
            [
                new Span('Min. Insulation Recommend', ['w-2/8']),
                new Span('> 100 MΩ', ['w-4/8']),
                new Span('PI Recommend', ['w-1/8']),
                new Span('2-5', ['w-1/8'])
            ],
            [
                new Input('insulation_incoming_id_no', 'Instrument Incoming ID NO.'),
                new Input('insulation_final_id_no', 'Final ID NO.'),
            ]
        ];
    }
}
