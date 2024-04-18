<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Dropdown;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class ResistanceInductanceTestSinglePhase extends Component
{
    protected static array $compatibleWith = [
        MotorType::SinglePhase,
    ];

    protected static array $data = [
        'resistance_inductance_test' => [
            [],
            [

                'resistance_incoming_unit' => 'mΩ',
                'resistance_final_unit' => 'mH',
                'inductance_incoming_unit' => 'mΩ',
                'inductance_final_unit' => 'mH',
                'resistance_incoming_unit' => 'mΩ',
                'resistance_final_unit' => 'mH',
                'inductance_incoming_unit' => 'mΩ',
                'inductance_final_unit' => 'mH',
            ],
            [
                // Slow
                'slow_resistance_incoming_marking_1' => '1',
                'slow_resistance_incoming_value_1' => '1',
                'slow_resistance_final_value_1' => '1',

                'slow_inductance_incoming_value_1' => '1',
                'slow_inductance_final_value_1' => '1',

                // Fast
                'fast_resistance_incoming_marking_1' => '1',
                'fast_resistance_incoming_value_1' => '1',
                'fast_resistance_final_value_1' => '1',

                'fast_inductance_incoming_value_1' => '1',
                'fast_inductance_final_value_1' => '1',
            ],
            [
                // Slow
                'slow_resistance_incoming_marking_2' => '2',
                'slow_resistance_incoming_value_2' => '2',
                'slow_resistance_final_value_2' => '2',

                'slow_inductance_incoming_value_2' => '2',
                'slow_inductance_final_value_2' => '2',

                // Fast
                'fast_resistance_incoming_marking_2' => '2',
                'fast_resistance_incoming_value_2' => '2',
                'fast_resistance_final_value_2' => '2',

                'fast_inductance_incoming_value_2' => '2',
                'fast_inductance_final_value_2' => '2',
            ],
            [
                // Slow
                'slow_resistance_incoming_marking_3' => '3',
                'slow_resistance_incoming_value_3' => '3',
                'slow_resistance_final_value_3' => '3',

                'slow_inductance_incoming_value_3' => '3',
                'slow_inductance_final_value_3' => '3',

                // Fast
                'fast_resistance_incoming_marking_3' => '3',
                'fast_resistance_incoming_value_3' => '3',
                'fast_resistance_final_value_3' => '3',

                'fast_inductance_incoming_value_3' => '3',
                'fast_inductance_final_value_3' => '3',
            ],
            [
                'resistance_incoming_id_no' => 'Res incoming ID No.',
                'inductance_incoming_id_no' => 'Ind incoming ID No.',
                'resistance_final_id_no' => 'Res final ID No.',
                'inductance_final_id_no' => 'Ind final ID No.',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'resistance_inductance_test_form',
                'title' => '',
                'action' => '/api/ex/save'
            ],
            'fieldset' => [
                'name' => 'resistance_inductance_test',
                'title' => 'Resistance & Inductance Test'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('RESISTANCE TEST'),
                new Span('INDUCTANCE TEST (Incoming)'),
                new Span('INDUCTANCE TEST (Final)'),
            ],
            [
                // Resistance
                new Span('Marking'),
                new Span('Incoming', ['mr-1', 'pr-1']),
                new Dropdown(
                    'resistance_incoming_unit',
                    '',
                    ['Ω', 'mΩ', 'MΩ', 'μΩ', 'GΩ'],
                ),
                new Span('Final', ['mr-1', 'pr-1']),
                new Dropdown(
                    'resistance_final_unit',
                    '',
                    ['H', 'mH', 'MH', 'μH',],
                ),

                new Span('Volt (Vdc.)', ['mr-1', 'pr-1']),
                new Span('Marking'),
                new Span('At 1min.'),
                new Dropdown(
                    'inductance_incoming_1_min_unit',
                    '',
                    ['Ω', 'mΩ', 'MΩ', 'μΩ', 'GΩ'],
                ),

                new Span('Volt (Vdc.)', ['mr-1', 'pr-1']),
                new Span('Marking'),
                new Span('At 1min.'),
                new Dropdown(
                    'inductance_final_1_min_unit',
                    '',
                    ['Ω', 'mΩ', 'MΩ', 'μΩ', 'GΩ'],
                ),

            ],
            [ // Row 1
                // Slow
                new Input('resistance_incoming_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][1]['resistance_incoming_unit'], ['mt-3']),
                new Input('resistance_final_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][1]['resistance_final_unit'], ['mt-3']),

                //     new Input('slow_inductance_incoming_value_1', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['slow_inductance_incoming_unit'], ['mt-3']),
                //     new Input('slow_inductance_final_value_1', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['slow_inductance_final_unit']),

                //     // Fast
                //     new Input('fast_resistance_incoming_marking_1', ''),
                //     new Input('fast_resistance_incoming_value_1', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['fast_resistance_incoming_unit'], ['mt-3']),
                //     new Input('fast_resistance_final_value_1', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['fast_resistance_final_unit'], ['mt-3']),

                //     new Input('fast_inductance_incoming_value_1', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['fast_inductance_incoming_unit'], ['mt-3']),
                //     new Input('fast_inductance_final_value_1', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['fast_inductance_final_unit'], ['mt-3']),
                // ],
                // [ // Row 2
                //     // Slow
                //     new Input('slow_resistance_incoming_marking_2', ''),
                //     new Input('slow_resistance_incoming_value_2', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['slow_resistance_incoming_unit'], ['mt-3']),
                //     new Input('slow_resistance_final_value_2', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['slow_resistance_final_unit'], ['mt-3']),

                //     new Input('slow_inductance_incoming_value_2', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['slow_inductance_incoming_unit'], ['mt-3']),
                //     new Input('slow_inductance_final_value_2', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['slow_inductance_final_unit']),

                //     // Fast
                //     new Input('fast_resistance_incoming_marking_2', ''),
                //     new Input('fast_resistance_incoming_value_2', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['fast_resistance_incoming_unit'], ['mt-3']),
                //     new Input('fast_resistance_final_value_2', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['fast_resistance_final_unit'], ['mt-3']),

                //     new Input('fast_inductance_incoming_value_2', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['fast_inductance_incoming_unit'], ['mt-3']),
                //     new Input('fast_inductance_final_value_2', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['fast_inductance_final_unit'], ['mt-3']),
                // ],
                // [ // Row 3
                //     // Slow
                //     new Input('slow_resistance_incoming_marking_3', ''),
                //     new Input('slow_resistance_incoming_value_3', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['slow_resistance_incoming_unit'], ['mt-3']),
                //     new Input('slow_resistance_final_value_3', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['slow_resistance_final_unit'], ['mt-3']),

                //     new Input('slow_inductance_incoming_value_3', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['slow_inductance_incoming_unit'], ['mt-3']),
                //     new Input('slow_inductance_final_value_3', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['slow_inductance_final_unit']),

                //     // Fast
                //     new Input('fast_resistance_incoming_marking_3', ''),
                //     new Input('fast_resistance_incoming_value_3', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['fast_resistance_incoming_unit'], ['mt-3']),
                //     new Input('fast_resistance_final_value_3', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['fast_resistance_final_unit'], ['mt-3']),

                //     new Input('fast_inductance_incoming_value_3', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['fast_inductance_incoming_unit'], ['mt-3']),
                //     new Input('fast_inductance_final_value_3', ''),
                //     new Span(static::$data['resistance_inductance_test'][2]['fast_inductance_final_unit'], ['mt-3']),
            ],
            [ // Row 4
                new Input('resistance_incoming_id_no', 'Instrument Incoming ID No.'),
                new Input('resistance_final_id_no', 'Final ID No.'),

                new Input('inductance_incoming_id_no', 'Instrument Incoming ID No.'),
                new Input('inductance_final_id_no', 'Instrument Final ID No.'),
            ]
        ];
    }
}
