<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Dropdown;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class ResistanceInductanceTestTwoSpeed extends Component
{
    protected static array $compatibleWith = [
        MotorType::TwoSpeed,
    ];

    protected static array $data = [
        'resistance_inductance_test' => [
            [],
            [],
            [

                'slow_resistance_incoming_unit' => 'mΩ',
                'slow_resistance_final_unit' => 'mH',
                'slow_inductance_incoming_unit' => 'mΩ',
                'slow_inductance_final_unit' => 'mH',
                'fast_resistance_incoming_unit' => 'mΩ',
                'fast_resistance_final_unit' => 'mH',
                'fast_inductance_incoming_unit' => 'mΩ',
                'fast_inductance_final_unit' => 'mH',
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
                new Span('Slow'),
                new Span('Fast')
            ],
            [
                new Span('RESISTANCE TEST'),
                new Span('INDUCTANCE TEST'),
                new Span('RESISTANCE TEST'),
                new Span('INDUCTANCE TEST'),
            ],
            [
                // Slow
                new Span('Marking'),
                new Span('Incoming', ['mr-1', 'pr-1']),
                new Dropdown(
                    'slow_resistance_incoming_unit',
                    '',
                    ['Ω', 'mΩ', 'MΩ', 'μΩ', 'GΩ'],
                ),
                new Span('Final', ['mr-1', 'pr-1']),
                new Dropdown(
                    'slow_resistance_final_unit',
                    '',
                    ['H', 'mH', 'MH', 'μH',],
                ),

                new Span('Incoming', ['mr-1', 'pr-1']),
                new Dropdown(
                    'slow_inductance_incoming_unit',
                    '',
                    ['Ω', 'mΩ', 'MΩ', 'μΩ', 'GΩ'],
                ),
                new Span('Final', ['mr-1', 'pr-1']),
                new Dropdown(
                    'slow_inductance_final_unit',
                    '',
                    ['H', 'mH', 'MH', 'μH',],
                ),

                // Fast
                new Span('Marking'),
                new Span('Incoming', ['mr-1', 'pr-1']),
                new Dropdown(
                    'fast_resistance_incoming_unit',
                    '',
                    ['Ω', 'mΩ', 'MΩ', 'μΩ', 'GΩ'],
                ),
                new Span('Final', ['mr-1', 'pr-1']),
                new Dropdown(
                    'fast_resistance_final_unit',
                    '',
                    ['H', 'mH', 'MH', 'μH',],
                ),

                new Span('Incoming', ['mr-1', 'pr-1']),
                new Dropdown(
                    'fast_inductance_incoming_unit',
                    '',
                    ['Ω', 'mΩ', 'MΩ', 'μΩ', 'GΩ'],
                ),
                new Span('Final', ['mr-1', 'pr-1']),
                new Dropdown(
                    'fast_inductance_final_unit',
                    '',
                    ['H', 'mH', 'MH', 'μH',],
                ),
            ],
            [ // Row 1
                // Slow
                new Input('slow_resistance_incoming_marking_1', ''),
                new Input('slow_resistance_incoming_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][2]['slow_resistance_incoming_unit'], ['mt-3']),
                new Input('slow_resistance_final_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][2]['slow_resistance_final_unit'], ['mt-3']),

                new Input('slow_inductance_incoming_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][2]['slow_inductance_incoming_unit'], ['mt-3']),
                new Input('slow_inductance_final_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][2]['slow_inductance_final_unit']),

                // Fast
                new Input('fast_resistance_incoming_marking_1', ''),
                new Input('fast_resistance_incoming_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][2]['fast_resistance_incoming_unit'], ['mt-3']),
                new Input('fast_resistance_final_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][2]['fast_resistance_final_unit'], ['mt-3']),

                new Input('fast_inductance_incoming_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][2]['fast_inductance_incoming_unit'], ['mt-3']),
                new Input('fast_inductance_final_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][2]['fast_inductance_final_unit'], ['mt-3']),
            ],
            [ // Row 2
                // Slow
                new Input('slow_resistance_incoming_marking_2', ''),
                new Input('slow_resistance_incoming_value_2', ''),
                new Span(static::$data['resistance_inductance_test'][2]['slow_resistance_incoming_unit'], ['mt-3']),
                new Input('slow_resistance_final_value_2', ''),
                new Span(static::$data['resistance_inductance_test'][2]['slow_resistance_final_unit'], ['mt-3']),

                new Input('slow_inductance_incoming_value_2', ''),
                new Span(static::$data['resistance_inductance_test'][2]['slow_inductance_incoming_unit'], ['mt-3']),
                new Input('slow_inductance_final_value_2', ''),
                new Span(static::$data['resistance_inductance_test'][2]['slow_inductance_final_unit']),

                // Fast
                new Input('fast_resistance_incoming_marking_2', ''),
                new Input('fast_resistance_incoming_value_2', ''),
                new Span(static::$data['resistance_inductance_test'][2]['fast_resistance_incoming_unit'], ['mt-3']),
                new Input('fast_resistance_final_value_2', ''),
                new Span(static::$data['resistance_inductance_test'][2]['fast_resistance_final_unit'], ['mt-3']),

                new Input('fast_inductance_incoming_value_2', ''),
                new Span(static::$data['resistance_inductance_test'][2]['fast_inductance_incoming_unit'], ['mt-3']),
                new Input('fast_inductance_final_value_2', ''),
                new Span(static::$data['resistance_inductance_test'][2]['fast_inductance_final_unit'], ['mt-3']),
            ],
            [ // Row 3
                // Slow
                new Input('slow_resistance_incoming_marking_3', ''),
                new Input('slow_resistance_incoming_value_3', ''),
                new Span(static::$data['resistance_inductance_test'][2]['slow_resistance_incoming_unit'], ['mt-3']),
                new Input('slow_resistance_final_value_3', ''),
                new Span(static::$data['resistance_inductance_test'][2]['slow_resistance_final_unit'], ['mt-3']),

                new Input('slow_inductance_incoming_value_3', ''),
                new Span(static::$data['resistance_inductance_test'][2]['slow_inductance_incoming_unit'], ['mt-3']),
                new Input('slow_inductance_final_value_3', ''),
                new Span(static::$data['resistance_inductance_test'][2]['slow_inductance_final_unit']),

                // Fast
                new Input('fast_resistance_incoming_marking_3', ''),
                new Input('fast_resistance_incoming_value_3', ''),
                new Span(static::$data['resistance_inductance_test'][2]['fast_resistance_incoming_unit'], ['mt-3']),
                new Input('fast_resistance_final_value_3', ''),
                new Span(static::$data['resistance_inductance_test'][2]['fast_resistance_final_unit'], ['mt-3']),

                new Input('fast_inductance_incoming_value_3', ''),
                new Span(static::$data['resistance_inductance_test'][2]['fast_inductance_incoming_unit'], ['mt-3']),
                new Input('fast_inductance_final_value_3', ''),
                new Span(static::$data['resistance_inductance_test'][2]['fast_inductance_final_unit'], ['mt-3']),
            ],
            [ // Row 4
                new Span('Instrument Incoming'),
                new Input('resistance_incoming_id_no', 'ID No.'),
                new Input('inductance_incoming_id_no', 'ID No.'),

                new Span('Instrument Final'),
                new Input('resistance_final_id_no', 'ID No.'),
                new Input('inductance_final_id_no', 'ID No.'),
            ]
        ];
    }
}
