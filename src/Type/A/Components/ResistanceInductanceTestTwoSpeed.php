<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Dropdown;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class ResistanceInductanceTestTwoSpeed extends ResistanceInductanceTest
{
    protected static array $compatibleWith = [
        MotorType::TwoSpeed,
    ];

    protected static array $data = [
        'resistance_inductance_test_two_speed' => [
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
                'slow_resistance_incoming_marking_1' => '-',
                'slow_resistance_incoming_value_1' => '-',
                'slow_resistance_final_value_1' => '-',

                'slow_inductance_incoming_value_1' => '-',
                'slow_inductance_final_value_1' => '-',

                // Fast
                'fast_resistance_incoming_marking_1' => '-',
                'fast_resistance_incoming_value_1' => '-',
                'fast_resistance_final_value_1' => '-',

                'fast_inductance_incoming_value_1' => '-',
                'fast_inductance_final_value_1' => '-',
            ],
            [
                // Slow
                'slow_resistance_incoming_marking_2' => '-',
                'slow_resistance_incoming_value_2' => '-',
                'slow_resistance_final_value_2' => '-',

                'slow_inductance_incoming_value_2' => '-',
                'slow_inductance_final_value_2' => '-',

                // Fast
                'fast_resistance_incoming_marking_2' => '-',
                'fast_resistance_incoming_value_2' => '-',
                'fast_resistance_final_value_2' => '-',

                'fast_inductance_incoming_value_2' => '-',
                'fast_inductance_final_value_2' => '-',
            ],
            [
                // Slow
                'slow_resistance_incoming_marking_3' => '-',
                'slow_resistance_incoming_value_3' => '-',
                'slow_resistance_final_value_3' => '-',

                'slow_inductance_incoming_value_3' => '-',
                'slow_inductance_final_value_3' => '-',

                // Fast
                'fast_resistance_incoming_marking_3' => '-',
                'fast_resistance_incoming_value_3' => '-',
                'fast_resistance_final_value_3' => '-',

                'fast_inductance_incoming_value_3' => '-',
                'fast_inductance_final_value_3' => '-',
            ],
            [
                'resistance_incoming_id_no' => '-',
                'inductance_incoming_id_no' => '-',
                'resistance_final_id_no' => '-',
                'inductance_final_id_no' => '-',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'resistance_inductance_test_two_speed_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'resistance_inductance_test_two_speed',
                'title' => 'Resistance & Inductance Test'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        $slowResistanceIncomingUnit = static::$data['resistance_inductance_test'][2]['slow_resistance_incoming_unit'] ?? '';
        $slowResistanceFinalUnit = static::$data['resistance_inductance_test'][2]['slow_resistance_final_unit'] ?? '';
        $slowInductanceIncomingUnit = static::$data['resistance_inductance_test'][2]['slow_inductance_incoming_unit'] ?? '';
        $slowInductanceFinalUnit = static::$data['resistance_inductance_test'][2]['slow_inductance_final_unit'] ?? '';
        $fastResistanceIncomingUnit = static::$data['resistance_inductance_test'][2]['fast_resistance_incoming_unit'] ?? '';
        $fastResistanceFinalUnit = static::$data['resistance_inductance_test'][2]['fast_resistance_final_unit'] ?? '';
        $fastInductanceIncomingUnit = static::$data['resistance_inductance_test'][2]['fast_inductance_incoming_unit'] ?? '';
        $fastInductanceFinalUnit = static::$data['resistance_inductance_test'][2]['fast_inductance_final_unit'] ?? '';
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
                new Input('slow_resistance_incoming_marking_1'),
                new Input('slow_resistance_incoming_value_1'),
                new Span($slowResistanceIncomingUnit, ['mt-3']),
                new Input('slow_resistance_final_value_1'),
                new Span($slowResistanceFinalUnit, ['mt-3']),

                new Input('slow_inductance_incoming_value_1'),
                new Span($slowInductanceIncomingUnit, ['mt-3']),
                new Input('slow_inductance_final_value_1'),
                new Span($slowResistanceFinalUnit, ['mt-3']),

                // Fast
                new Input('fast_resistance_incoming_marking_1'),
                new Input('fast_resistance_incoming_value_1'),
                new Span($fastResistanceIncomingUnit, ['mt-3']),
                new Input('fast_resistance_final_value_1'),
                new Span($fastResistanceFinalUnit, ['mt-3']),

                new Input('fast_inductance_incoming_value_1'),
                new Span($fastResistanceIncomingUnit, ['mt-3']),
                new Input('fast_inductance_final_value_1'),
                new Span($fastInductanceFinalUnit, ['mt-3']),
            ],
            [ // Row 2
                // Slow
                new Input('slow_resistance_incoming_marking_2'),
                new Input('slow_resistance_incoming_value_2'),
                new Span($slowResistanceIncomingUnit, ['mt-3']),
                new Input('slow_resistance_final_value_2'),
                new Span($slowResistanceFinalUnit, ['mt-3']),

                new Input('slow_inductance_incoming_value_2'),
                new Span($slowInductanceIncomingUnit, ['mt-3']),
                new Input('slow_inductance_final_value_2'),
                new Span($slowInductanceFinalUnit),

                // Fast
                new Input('fast_resistance_incoming_marking_2'),
                new Input('fast_resistance_incoming_value_2'),
                new Span($fastResistanceIncomingUnit, ['mt-3']),
                new Input('fast_resistance_final_value_2'),
                new Span($fastResistanceFinalUnit, ['mt-3']),

                new Input('fast_inductance_incoming_value_2'),
                new Span($fastInductanceIncomingUnit, ['mt-3']),
                new Input('fast_inductance_final_value_2'),
                new Span($fastResistanceFinalUnit, ['mt-3']),
            ],
            [ // Row 3
                // Slow
                new Input('slow_resistance_incoming_marking_3'),
                new Input('slow_resistance_incoming_value_3'),
                new Span($slowResistanceIncomingUnit, ['mt-3']),
                new Input('slow_resistance_final_value_3'),
                new Span($slowResistanceFinalUnit, ['mt-3']),

                new Input('slow_inductance_incoming_value_3'),
                new Span($slowInductanceIncomingUnit, ['mt-3']),
                new Input('slow_inductance_final_value_3'),
                new Span($slowInductanceFinalUnit),

                // Fast
                new Input('fast_resistance_incoming_marking_3'),
                new Input('fast_resistance_incoming_value_3'),
                new Span($fastResistanceIncomingUnit, ['mt-3']),
                new Input('fast_resistance_final_value_3'),
                new Span($fastResistanceFinalUnit, ['mt-3']),

                new Input('fast_inductance_incoming_value_3'),
                new Span($fastInductanceIncomingUnit, ['mt-3']),
                new Input('fast_inductance_final_value_3'),
                new Span($fastInductanceFinalUnit, ['mt-3']),
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
