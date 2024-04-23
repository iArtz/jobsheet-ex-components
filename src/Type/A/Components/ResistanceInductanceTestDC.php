<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class ResistanceInductanceTestDC extends Component
{
    protected static array $compatibleWith = [
        MotorType::DC,
    ];

    protected static array $data = [
        'resistance_inductance_test' => [
            [],
            [],
            [
                'resistance_incoming_shunt_field' => 'resistance_incoming_shunt_field',
                'resistance_incoming_interpole' => 'resistance_incoming_interpole',
                'resistance_incoming_series_field' => 'resistance_incoming_series_field',
                'resistance_incoming_interpole_compensate' => 'resistance_incoming_interpole_compensate',
            ],
            [],
            [],
            [
                'resistance_final_shunt_field' => 'resistance_final_shunt_field',
                'resistance_final_interpole' => 'resistance_final_interpole',
                'resistance_final_series_field' => 'resistance_final_series_field',
                'resistance_final_interpole_compensate' => 'resistance_final_interpole_compensate',
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
            [new Span('INCOMING RESISTANCE TEST', ['text-red-500', 'text-left', 'w-full'])],
            [
                new Span('Terminal'),
                new Span('Shunt Field(Ω)'),
                new Span('Interpole (mΩ)'),
                new Span('Series Field (mΩ)'),
                new Span('Interpole & Compensate (mΩ)')
            ],
            [
                new Span('Resistance Values'),
                new Input('resistance_incoming_shunt_field', ''),
                new Input('resistance_incoming_interpole', ''),
                new Input('resistance_incoming_series_field', ''),
                new Input('resistance_incoming_interpole_compensate', ''),
            ],
            [new Span('FINAL RESISTANCE TEST', ['text-red-500', 'text-left', 'w-full'])],
            [
                new Span('Terminal'),
                new Span('Shunt Field(Ω)'),
                new Span('Interpole (mΩ)'),
                new Span('Series Field (mΩ)'),
                new Span('Interpole & Compensate (mΩ)')
            ],
            [
                new Span('Resistance Values'),
                new Input('resistance_final_shunt_field', ''),
                new Input('resistance_final_interpole', ''),
                new Input('resistance_final_series_field', ''),
                new Input('resistance_final_interpole_compensate', ''),
            ]
        ];
    }
}
