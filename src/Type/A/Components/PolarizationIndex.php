<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class PolarizationIndex extends Component
{
    protected static array $compatibleWith = [
        MotorType::MV
    ];

    protected static array $data = [
        'polarization_index' => [
            [],
            [],
            [],
            [
                'insulation_res_incoming_celsius_1' => 'insulation_res_incoming_celsius_1',
                'insulation_res_incoming_celsius_2' => 'insulation_res_incoming_celsius_2',
                'insulation_res_final_celsius_1' => 'insulation_res_final_celsius_1',
                'insulation_res_final_celsius_2' => 'insulation_res_final_celsius_2',
            ],
            [
                'volt' => 'volt',
                'insulation_res_incoming_1_1' => 'insulation_res_incoming_1_1',
                'insulation_res_incoming_1_2' => 'insulation_res_incoming_1_2',
                'insulation_res_final_1_1' => 'insulation_res_final_1_1',
                'insulation_res_final_1_2' => 'insulation_res_final_1_2',
                'insulation_symbol_incoming_1' => 'insulation_symbol_incoming_1',
            ],
            [
                'insulation_res_incoming_2_1' => 'insulation_res_incoming_2_1',
                'insulation_res_incoming_2_2' => 'insulation_res_incoming_2_2',
                'insulation_res_final_2_1' => 'insulation_res_final_2_1',
                'insulation_res_final_2_2' => 'insulation_res_final_2_2',
                'insulation_symbol_incoming_2' => 'insulation_symbol_incoming_2',
            ],
            [
                'insulation_res_incoming_3_1' => 'insulation_res_incoming_3_1',
                'insulation_res_incoming_3_2' => 'insulation_res_incoming_3_2',
                'insulation_res_final_3_1' => 'insulation_res_final_3_1',
                'insulation_res_final_3_2' => 'insulation_res_final_3_2',
                'insulation_symbol_incoming_3' => 'insulation_symbol_incoming_3',
            ],
            [
                'insulation_res_incoming_4_1' => 'insulation_res_incoming_4_1',
                'insulation_res_incoming_4_2' => 'insulation_res_incoming_4_2',
                'insulation_res_final_4_1' => 'insulation_res_final_4_1',
                'insulation_res_final_4_2' => 'insulation_res_final_4_2',
                'insulation_symbol_incoming_4' => 'insulation_symbol_incoming_4',
            ],
            [
                'insulation_res_incoming_5_1' => 'insulation_res_incoming_5_1',
                'insulation_res_incoming_5_2' => 'insulation_res_incoming_5_2',
                'insulation_res_final_5_1' => 'insulation_res_final_5_1',
                'insulation_res_final_5_2' => 'insulation_res_final_5_2',
            ],
            [
                'insulation_res_incoming_6_1' => 'insulation_res_incoming_6_1',
                'insulation_res_incoming_6_2' => 'insulation_res_incoming_6_2',
                'insulation_res_final_6_1' => 'insulation_res_final_6_1',
                'insulation_res_final_6_2' => 'insulation_res_final_6_2',
            ],
            [
                'insulation_res_incoming_7_1' => 'insulation_res_incoming_7_1',
                'insulation_res_incoming_7_2' => 'insulation_res_incoming_7_2',
                'insulation_res_final_7_1' => 'insulation_res_final_7_1',
                'insulation_res_final_7_2' => 'insulation_res_final_7_2',
            ],
            [
                'insulation_res_incoming_8_1' => 'insulation_res_incoming_8_1',
                'insulation_res_incoming_8_2' => 'insulation_res_incoming_8_2',
                'insulation_res_final_8_1' => 'insulation_res_final_8_1',
                'insulation_res_final_8_2' => 'insulation_res_final_8_2',
            ],
            [
                'insulation_res_incoming_9_1' => 'insulation_res_incoming_9_1',
                'insulation_res_incoming_9_2' => 'insulation_res_incoming_9_2',
                'insulation_res_final_9_1' => 'insulation_res_final_9_1',
                'insulation_res_final_9_2' => 'insulation_res_final_9_2',
            ],
            [
                'insulation_res_incoming_10_1' => 'insulation_res_incoming_10_1',
                'insulation_res_incoming_10_2' => 'insulation_res_incoming_10_2',
                'insulation_res_final_10_1' => 'insulation_res_final_10_1',
                'insulation_res_final_10_2' => 'insulation_res_final_10_2',
            ]
        ]
    ];

    private static function generateMockData()

    {
        for ($i = 5; $i <= 10; $i++) {
            $elements[] =
                [
                    'insulation_res_incoming_' . $i . '_1' => 'insulation_res_incoming_' . $i . '_1',
                    'insulation_res_incoming_' . $i . '_2' => 'insulation_res_incoming_' . $i . '_2',
                    'insulation_res_final_' . $i . '_1' => 'insulation_res_final_' . $i . '_1',
                    'insulation_res_final_' . $i . '_2' => 'insulation_res_final_' . $i . '_2',
                ];
        }
        static::$data['polarization_index'][] = $elements;
    }

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'polarization_index_form',
                'title' => '',
                'action' => '/api/ex/save'
            ],
            'fieldset' => [
                'name' => 'polarization_index',
                'title' => 'Polarization Index'
            ]
        ];

        static::generateMockData();

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        $elements = [
            [new Span('POLARIZATION INDEX')],
            [
                new Span('Insulation Resistance (Phase - Earth)'),
            ],
            [
                new Span('Incoming'),
                new Span('Final'),
            ],
            [
                new Span('Volt (Vdc.)'),
                new Span('Time (min.)'),
                new Input('insulation_res_incoming_celsius_1', ''),
                new Input('insulation_res_incoming_celsius_2', ''),
                new Input('insulation_res_final_celsius_1', ''),
                new Input('insulation_res_final_celsius_2', ''),
                new Span('Symbol'),
            ],
            [
                new Input('volt', ''),
                new Span('1'),
                new Input('insulation_res_incoming_1_1', ''),
                new Input('insulation_res_incoming_1_2', ''),
                new Input('insulation_res_final_1_1', ''),
                new Input('insulation_res_final_1_2', ''),
                new Input('insulation_symbol_incoming_1', ''),
            ],
            [
                new Span('-'),
                new Span('2'),
                new Input('insulation_res_incoming_2_1', ''),
                new Input('insulation_res_incoming_2_2', ''),
                new Input('insulation_res_final_2_1', ''),
                new Input('insulation_res_final_2_2', ''),
                new Input('insulation_symbol_incoming_2', ''),
            ],
            [
                new Span('-'),
                new Span('3'),
                new Input('insulation_res_incoming_3_1', ''),
                new Input('insulation_res_incoming_3_2', ''),
                new Input('insulation_res_final_3_1', ''),
                new Input('insulation_res_final_3_2', ''),
                new Input('insulation_symbol_incoming_3', ''),
            ],
            [
                new Span('-'),
                new Span('4'),
                new Input('insulation_res_incoming_4_1', ''),
                new Input('insulation_res_incoming_4_2', ''),
                new Input('insulation_res_final_4_1', ''),
                new Input('insulation_res_final_4_2', ''),
                new Input('insulation_symbol_incoming_4', ''),
            ]
        ];

        for ($i = 5; $i <= 10; $i++) {
            $elements[] =
                [
                    new Span('-'),
                    new Span($i),
                    new Input('insulation_res_incoming_' . $i . '_1', ''),
                    new Input('insulation_res_incoming_' . $i . '_2', ''),
                    new Input('insulation_res_final_' . $i . '_1', ''),
                    new Input('insulation_res_final_' . $i . '_2', ''),
                    new Span('-'),
                ];
        }

        return $elements;
    }
}
