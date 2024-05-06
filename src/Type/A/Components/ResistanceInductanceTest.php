<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Dropdown;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class ResistanceInductanceTest extends Component
{
    protected static array $compatibleWith = [
        MotorType::LV,
        MotorType::MV
    ];

    protected static array $data = [
        'resistance_inductance_test' => [
            [],
            [
                'resistance_incoming_values_unit' => 'Ω',
                'inductance_incoming_values_unit' => 'mH',
                'resistance_final_values_unit' => 'Ω',
                'inductance_final_values_unit' => 'mH',
            ],
            [
                'resistance_incoming_marking_1' => '1',
                'resistance_incoming_value_1' => '1',
                'inductance_incoming_marking_1' => '1',
                'inductance_incoming_value_1' => '1',

                'resistance_final_marking_1' => '1',
                'resistance_final_value_1' => '1',
                'inductance_final_marking_1' => '1',
                'inductance_final_value_1' => '1',
            ],
            [
                'resistance_incoming_marking_2' => '2',
                'resistance_incoming_value_2' => '2',
                'inductance_incoming_marking_2' => '2',
                'inductance_incoming_value_2' => '2',

                'resistance_final_marking_2' => '2',
                'resistance_final_value_2' => '2',
                'inductance_final_marking_2' => '2',
                'inductance_final_value_2' => '2',
            ],
            [
                'resistance_incoming_marking_3' => '3',
                'resistance_incoming_value_3' => '3',
                'inductance_incoming_marking_3' => '3',
                'inductance_incoming_value_3' => '3',

                'resistance_final_marking_3' => '3',
                'resistance_final_value_3' => '3',
                'inductance_final_marking_3' => '3',
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
        $resistanceIncomingUnit = static::$data['resistance_inductance_test'][1]['resistance_incoming_values_unit'] ?? '-';
        $inductanceIncomingUnit = static::$data['resistance_inductance_test'][1]['inductance_incoming_values_unit'] ?? '-';
        $resistanceFinalUnit = static::$data['resistance_inductance_test'][1]['resistance_final_values_unit'] ?? '-';
        $inductanceFinalUnit = static::$data['resistance_inductance_test'][1]['inductance_final_values_unit'] ?? '-';
        return [
            [
                new Span('RESISTANCE TEST(Incoming)'),
                new Span('INDUCTANCE TEST(Incoming)'),
                new Span('RESISTANCE TEST(Final)'),
                new Span('INDUCTANCE TEST(Final)'),
            ],
            [
                new Span('Marking'),
                new Span('Values', ['mr-1', 'pr-1']),
                new Dropdown(
                    'resistance_incoming_values_unit',
                    '',
                    ['Ω', 'mΩ', 'MΩ', 'μΩ', 'GΩ'],
                    ['-ml-10']
                ),
                new Span('Marking'),
                new Span('Values', ['mr-1', 'pr-1']),
                new Dropdown(
                    'inductance_incoming_values_unit',
                    '',
                    ['H', 'mH', 'MH', 'μH',],
                    ['-ml-10']
                ),

                new Span('Marking'),
                new Span('Values', ['mr-1', 'pr-1']),
                new Dropdown(
                    'resistance_final_values_unit',
                    '',
                    ['Ω', 'mΩ', 'MΩ', 'μΩ', 'GΩ'],
                    ['-ml-10']
                ),
                new Span('Marking'),
                new Span('Values', ['mr-1', 'pr-1']),
                new Dropdown(
                    'inductance_final_values_unit',
                    '',
                    ['H', 'mH', 'MH', 'μH',],
                    ['-ml-10']
                ),
            ],
            [ // Row 1
                // Incoming
                new Input('resistance_incoming_marking_1', ''),
                new Input('resistance_incoming_value_1', ''),
                new Span($resistanceIncomingUnit, ['mt-3']),
                new Input('inductance_incoming_marking_1', ''),
                new Input('inductance_incoming_value_1', ''),
                new Span($inductanceIncomingUnit, ['mt-3']),

                // Final
                new Input('resistance_final_marking_1', ''),
                new Input('resistance_final_value_1', ''),
                new Span($resistanceFinalUnit, ['mt-3']),
                new Input('inductance_final_marking_1', ''),
                new Input('inductance_final_value_1', ''),
                new Span($inductanceFinalUnit, ['mt-3']),
            ],
            [ // Row 2
                // Incoming
                new Input('resistance_incoming_marking_2', ''),
                new Input('resistance_incoming_value_2', ''),
                new Span($resistanceIncomingUnit, ['mt-3']),
                new Input('inductance_incoming_marking_2', ''),
                new Input('inductance_incoming_value_2', ''),
                new Span($inductanceIncomingUnit, ['mt-3']),

                // Final
                new Input('resistance_final_marking_2', ''),
                new Input('resistance_final_value_2', ''),
                new Span($resistanceFinalUnit, ['mt-3']),
                new Input('inductance_final_marking_2', ''),
                new Input('inductance_final_value_2', ''),
                new Span($inductanceFinalUnit, ['mt-3']),
            ],
            [ // Row 3
                // Incoming
                new Input('resistance_incoming_marking_3', ''),
                new Input('resistance_incoming_value_3', ''),
                new Span($resistanceIncomingUnit, ['mt-3']),
                new Input('inductance_incoming_marking_3', ''),
                new Input('inductance_incoming_value_3', ''),
                new Span($inductanceIncomingUnit, ['mt-3']),

                // Final
                new Input('resistance_final_marking_3', ''),
                new Input('resistance_final_value_3', ''),
                new Span($resistanceFinalUnit, ['mt-3']),
                new Input('inductance_final_marking_3', ''),
                new Input('inductance_final_value_3', ''),
                new Span($inductanceFinalUnit, ['mt-3']),
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
