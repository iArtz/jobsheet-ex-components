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
                'resistance_final_unit' => 'mΩ',
                'inductance_incoming_unit' => 'mΩ',
                'inductance_final_unit' => 'mΩ',
            ],
            [ // Row 1
                'resistance_incoming_value_1' => '1',
                'resistance_final_value_1' => '1',
                'inductance_incoming_volt' => '1',
                'inductance_incoming_value_1' => '1',
                'inductance_final_volt' => '1',
                'inductance_final_value_1' => '1',
            ],
            [ // Row 2
                'resistance_incoming_value_2' => '2',
                'resistance_final_value_2' => '2',
                'inductance_incoming_volt' => '2',
                'inductance_incoming_value_2' => '2',
                'inductance_final_volt' => '2',
                'inductance_final_value_2' => '2',
            ],
            [ // Row 3
                'resistance_incoming_value_3' => '3',
                'resistance_final_value_3' => '3',
                'inductance_incoming_volt' => '3',
                'inductance_incoming_value_3' => '3',
                'inductance_final_volt' => '3',
                'inductance_final_value_3' => '3',
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
                    ['Ω', 'mΩ', 'MΩ', 'μΩ', 'GΩ'],
                ),

                // Inductance Incoming
                new Span('Volt (Vdc.)'),
                new Span('Marking'),
                new Span('At 1min.'),
                new Dropdown(
                    'inductance_incoming_unit',
                    '',
                    ['Ω', 'mΩ', 'MΩ', 'μΩ', 'GΩ'],
                ),

                // Inductance Final
                new Span('Volt (Vdc.)'),
                new Span('Marking'),
                new Span('At 1min.'),
                new Dropdown(
                    'inductance_final_unit',
                    '',
                    ['Ω', 'mΩ', 'MΩ', 'μΩ', 'GΩ'],
                ),
            ],
            [ // Row 1
                new Span('S1-S2'),
                new Input('resistance_incoming_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][1]['resistance_incoming_unit'], ['mt-3']),
                new Input('resistance_final_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][1]['resistance_final_unit'], ['mt-3']),

                new Input('inductance_incoming_volt', ''),
                new Span('R-S'),
                new Input('inductance_incoming_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][1]['inductance_incoming_unit'], ['mt-3']),

                new Input('inductance_final_volt', ''),
                new Span('R-S'),
                new Input('inductance_final_value_1', ''),
                new Span(static::$data['resistance_inductance_test'][1]['inductance_final_unit'], ['mt-3']),
            ],
            [ // Row 2
                new Span('R1-R2'),
                new Input('resistance_incoming_value_2', ''),
                new Span(static::$data['resistance_inductance_test'][1]['resistance_incoming_unit'], ['mt-3']),
                new Input('resistance_final_value_2', ''),
                new Span(static::$data['resistance_inductance_test'][1]['resistance_final_unit'], ['mt-3']),

                new Input('inductance_final_volt', ''),
                new Span('R-E'),
                new Input('inductance_incoming_value_2', ''),
                new Span(static::$data['resistance_inductance_test'][1]['inductance_incoming_unit'], ['mt-3']),

                new Span('R-E'),
                new Input('inductance_final_value_2', ''),
                new Span(static::$data['resistance_inductance_test'][1]['inductance_final_unit'], ['mt-3']),
            ],
            [ // Row 3
                new Span('Common'),
                new Input('resistance_incoming_value_3', ''),
                new Span(static::$data['resistance_inductance_test'][1]['resistance_incoming_unit'], ['mt-3']),
                new Input('resistance_final_value_3', ''),
                new Span(static::$data['resistance_inductance_test'][1]['resistance_final_unit'], ['mt-3']),

                new Input('inductance_final_volt', ''),
                new Span('S-E'),
                new Input('inductance_incoming_value_3', ''),
                new Span(static::$data['resistance_inductance_test'][1]['inductance_incoming_unit'], ['mt-3']),

                new Span('S-E'),
                new Input('inductance_final_value_3', ''),
                new Span(static::$data['resistance_inductance_test'][1]['inductance_final_unit'], ['mt-3']),
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
