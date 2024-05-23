<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class MechanicalRepairing extends Component
{
    protected static array $compatibleWith = [
        MotorType::LV,
        MotorType::MV,
        MotorType::DC,
        MotorType::SinglePhase,
        MotorType::TwoSpeed
    ];

    protected static array $data = [
        'mechanical_repairing' => [
            [], [], [],
            [
                'housing_incoming_de' => '-',
                'housing_incoming_nde' => '-',
                'housing_final_de' => '-',
                'housing_final_nde' => '-',

                'shaft_incoming_de' => '-',
                'shaft_incoming_nde' => '-',
                'shaft_final_de' => '-',
                'shaft_final_nde' => '-',
            ],
            [
                'housing_final_de_max' => '-',
                'housing_final_nde_max' => '-',
                'shaft_final_de_max' => '-',
                'shaft_final_nde_max' => '-',
            ],
            [
                'housing_final_de_min' => '-',
                'housing_final_nde_min' => '-',
                'shaft_final_de_min' => '-',
                'shaft_final_nde_min' => '-',
            ], []
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'mechanical_repairing_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'mechanical_repairing',
                'title' => 'Mechanical Repairing'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('ϕHousing (mm.)', ['bg-red-100']),
                new Span('ϕShaft (mm.)', ['bg-green-100']),
            ],
            [
                new Span('Incoming'),
                new Span('Final'),

                new Span('Incoming'),
                new Span('Final')
            ],
            [
                new Span('DE'),
                new Span('NDE'),
                new Span('DE'),
                new Span('NDE'),

                new Span('DE'),
                new Span('NDE'),
                new Span('DE'),
                new Span('NDE'),
            ],
            [
                new Input('housing_incoming_de'),
                new Input('housing_incoming_nde'),
                new Input('housing_final_de'),
                new Input('housing_final_nde'),

                new Input('shaft_incoming_de'),
                new Input('shaft_incoming_nde'),
                new Input('shaft_final_de'),
                new Input('shaft_final_nde'),
            ],
            [
                new Span('Acceptable Housing', ['!border-b-0', '!text-[9px]']),
                new Span('Max.'),
                new Input('housing_final_de_max'),
                new Input('housing_final_nde_max'),
                new Span('Acceptable Shaft', ['!border-b-0', '!text-[9px]']),
                new Span('Max.'),
                new Input('shaft_final_de_max'),
                new Input('shaft_final_nde_max'),
            ],
            [
                new Span('Fits (mm.)', ['!border-t-0', '!text-[9px]']),
                new Span('Min.'),
                new Input('housing_final_de_min'),
                new Input('housing_final_nde_min'),
                new Span('Fits (mm.)', ['!border-t-0', '!text-[9px]']),
                new Span('Min.'),
                new Input('shaft_final_de_min'),
                new Input('shaft_final_nde_min'),
            ],
            [
                new Span('EASA STANDARD AR100-2001'),
                new Span('EASA STANDARD AR100-2001'),
            ]
        ];
    }
}
