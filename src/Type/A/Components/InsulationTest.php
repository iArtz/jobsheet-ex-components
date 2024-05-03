<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class InsulationTest extends Component
{
    protected static array $compatibleWith = [
        MotorType::LV,
        MotorType::MV,
    ];

    protected static array $data = [
        'insulation_test' => [
            [],
            [],
            [
                'insulation_incoming_volt' => '1',
                'insulation_incoming_mark_1' => '1',
                'insulation_incoming_1_min_1' => '1',
                'insulation_incoming_10_min_1' => '1',
                'insulation_incoming_pi' => '1',
                'insulation_final_volt' => '1',
                'insulation_final_mark_1' => '1',
                'insulation_final_1_min_1' => '1',
                'insulation_final_10_min_1' => '1',
                'insulation_final_pi' => '1',
            ],
            [
                'insulation_incoming_mark_2' => '2',
                'insulation_incoming_1_min_2' => '2',
                'insulation_incoming_10_min_2' => '2',
                'insulation_final_mark_2' => '2',
                'insulation_final_1_min_2' => '2',
                'insulation_final_10_min_2' => '2'
            ], [
                'insulation_incoming_mark_3' => '3',
                'insulation_incoming_1_min_3' => '3',
                'insulation_incoming_10_min_3' => '3',
                'insulation_final_mark_3' => '3',
                'insulation_final_1_min_3' => '3',
                'insulation_final_10_min_3' => '3'
            ],
            [
                'insulation_incoming_1_min_4' => '4',
                'insulation_incoming_10_min_4' => '4',
                'insulation_final_1_min_4' => '4',
                'insulation_final_10_min_4' => '4'
            ],
            [],
            [
                'insulation_incoming_id_no' => 'insulation_incoming_id_no',
                'insulation_final_id_no' => 'insulation_final_id_no',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'insulation_test_form',
                'title' => '',
                'action' => '/api/ex/save'
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
                new Span('INSULATION TEST (Incoming)'),
                new Span('INSULATION TEST (Final)'),
            ],
            [
                new Span('Volt (Vde.)'),
                new Span('Marking'),
                new Span('At 1min.'),
                new Span('At 10min.'),
                new Span('PI'),
                new Span('Volt (Vde.)'),
                new Span('Marking'),
                new Span('At 1min.'),
                new Span('At 10min.'),
                new Span('PI'),
            ],
            [
                new Input('insulation_incoming_volt', ''),
                new Input('insulation_incoming_mark_1', ''),
                new Input('insulation_incoming_1_min_1', ''),
                new Input('insulation_incoming_10_min_1', ''),
                new Input('insulation_incoming_pi', ''),

                new Input('insulation_final_volt', ''),
                new Input('insulation_final_mark_1', ''),
                new Input('insulation_final_1_min_1', ''),
                new Input('insulation_final_10_min_1', ''),
                new Input('insulation_final_pi', ''),
            ],
            [
                new Span('', ['w-full']),
                new Input('insulation_incoming_mark_2', ''),
                new Input('insulation_incoming_1_min_2', ''),
                new Input('insulation_incoming_10_min_2', ''),
                new Span('', ['w-full']),
                new Span('', ['w-full']),
                new Input('insulation_final_mark_2', ''),
                new Input('insulation_final_1_min_2', ''),
                new Input('insulation_final_10_min_2', ''),
                new Span('', ['w-full']),
            ],
            [
                new Span('', ['w-full']),
                new Input('insulation_incoming_mark_3', ''),
                new Input('insulation_incoming_1_min_3', ''),
                new Input('insulation_incoming_10_min_3', ''),
                new Span('', ['w-full']),
                new Span('', ['w-full']),
                new Input('insulation_final_mark_3', ''),
                new Input('insulation_final_1_min_3', ''),
                new Input('insulation_final_10_min_3', ''),
                new Span('', ['w-full']),
            ],
            [
                new Span('', ['w-full']),
                new Span('Phase - Earth'),
                new Input('insulation_incoming_1_min_4', ''),
                new Input('insulation_incoming_10_min_4', ''),
                new Span('', ['w-full']),
                new Span('', ['w-full']),
                new Span('Phase - Earth'),
                new Input('insulation_final_1_min_4', ''),
                new Input('insulation_final_10_min_4', ''),
                new Span('', ['w-full']),
            ],
            [
                new Span('Min. Insulation Recommend'),
                new Span('( LV. > 20 MW at 20 C ) '),
                new Span('( MV. > 100 MW )'),
                new Span('', ['w-1/4']),
                new Span('Polarizasion Index Recommend', ['w-1/4']),
                new Span('2-5', ['w-1/4'])
            ],
            [
                new Input('insulation_incoming_id_no', 'Instrument Incoming ID NO.'),
                new Input('insulation_final_id_no', 'Instrument Final ID NO.'),
            ]
        ];
    }
}
