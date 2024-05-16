<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Dropdown;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class ResistanceInductanceTestSinglePhase extends ResistanceInductanceTest
{
    protected static array $compatibleWith = [
        MotorType::SinglePhase,
    ];

    protected static array $data = [
        'resistance_inductance_test_single_phase' => [
            [],
            [
                'resistance_incoming_unit' => 'mΩ',
                'resistance_final_unit' => 'mΩ',
                'inductance_incoming_unit' => 'mΩ',
                'inductance_final_unit' => 'mΩ',
            ],
            [ // Row 1
                'resistance_incoming_value_1' => '-',
                'resistance_final_value_1' => '-',
                'inductance_incoming_volt' => '-',
                'inductance_incoming_value_1' => '-',
                'inductance_final_volt' => '-',
                'inductance_final_value_1' => '-',
            ],
            [ // Row 2
                'resistance_incoming_value_2' => '-',
                'resistance_final_value_2' => '-',
                'inductance_incoming_value_2' => '-',
                'inductance_final_value_2' => '-',
            ],
            [ // Row 3
                'resistance_incoming_value_3' => '-',
                'resistance_final_value_3' => '-',
                'inductance_incoming_value_3' => '-',
                'inductance_final_value_3' => '-',
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
                'name' => 'resistance_inductance_test_single_phase_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'resistance_inductance_test_single_phase',
                'title' => 'Resistance & Inductance Test'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        $resistanceIncomingUnit = static::$data['resistance_inductance_test'][1]['resistance_incoming_unit'] ?? '';
        $resistanceFinalUnit = static::$data['resistance_inductance_test'][1]['resistance_final_unit'] ?? '';
        $inductanceIncomingUnit = static::$data['resistance_inductance_test'][1]['inductance_incoming_unit'] ?? '';
        $inductanceFinalUnit = static::$data['resistance_inductance_test'][1]['inductance_final_unit'] ?? '';
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
                new Input('resistance_incoming_value_1'),
                new Span($resistanceIncomingUnit, ['mt-3']),
                new Input('resistance_final_value_1'),
                new Span($resistanceFinalUnit, ['mt-3']),

                new Input('inductance_incoming_volt'),
                new Span('R-S'),
                new Input('inductance_incoming_value_1'),
                new Span($inductanceIncomingUnit, ['mt-3']),

                new Input('inductance_final_volt'),
                new Span('R-S'),
                new Input('inductance_final_value_1'),
                new Span($inductanceFinalUnit, ['mt-3']),
            ],
            [ // Row 2
                new Span('R1-R2'),
                new Input('resistance_incoming_value_2'),
                new Span($resistanceIncomingUnit, ['mt-3']),
                new Input('resistance_final_value_2'),
                new Span($resistanceFinalUnit, ['mt-3']),

                new Span('', ['w-full']),
                new Span('R-E'),
                new Input('inductance_incoming_value_2'),
                new Span($inductanceIncomingUnit, ['mt-3']),

                new Span('', ['w-full']),
                new Span('R-E'),
                new Input('inductance_final_value_2'),
                new Span($inductanceFinalUnit, ['mt-3']),
            ],
            [ // Row 3
                new Span('Common'),
                new Input('resistance_incoming_value_3'),
                new Span($resistanceIncomingUnit, ['mt-3']),
                new Input('resistance_final_value_3'),
                new Span($resistanceFinalUnit, ['mt-3']),

                new Span('', ['w-full']),
                new Span('S-E'),
                new Input('inductance_incoming_value_3'),
                new Span($inductanceIncomingUnit, ['mt-3']),

                new Span('', ['w-full']),
                new Span('S-E'),
                new Input('inductance_final_value_3'),
                new Span($inductanceIncomingUnit, ['mt-3']),
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
