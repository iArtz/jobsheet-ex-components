<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class OthersComponents extends Component
{
    protected static array $compatibleWith = [
        MotorType::DC,
        MotorType::LV,
        MotorType::MV,
        MotorType::SinglePhase,
        MotorType::TwoSpeed
    ];

    protected static array $data = [
        'others_components' => [
            [],
            [
                'oil_seal_de_replace' => true,
                'oil_seal_de_replace_note' => '-',
                'oil_seal_de_na' => true,
                'oil_seal_de_note' => '-',
                'oil_seal_de_accept' => true,
                'oil_seal_de_accept_note' => '-',
            ],
            [
                'oil_seal_nde_replace' => true,
                'oil_seal_nde_replace_note' => '-',
                'oil_seal_nde_na' => true,
                'oil_seal_nde_note' => '-',
                'oil_seal_nde_accept' => true,
                'oil_seal_nde_accept_note' => '-',
            ],
            [
                'v-ring_de_replace' => true,
                'v-ring_de_replace_note' => '-',
                'v-ring_de_na' => true,
                'v-ring_de_note' => '-',
                'v-ring_de_accept' => true,
                'v-ring_de_accept_note' => '-',
            ],
            [
                'v-ring_nde_replace' => true,
                'v-ring_nde_replace_note' => '-',
                'v-ring_nde_na' => true,
                'v-ring_nde_note' => '-',
                'v-ring_nde_accept' => true,
                'v-ring_nde_accept_note' => '-',
            ],
            [
                'wave_spring_replace' => true,
                'wave_spring_replace_note' => '-',
                'wave_spring_na' => true,
                'wave_spring_note' => '-',
                'wave_spring_accept' => true,
                'wave_spring_accept_note' => '-',
            ], [
                'eye_bolt_replace' => true,
                'eye_bolt_replace_note' => '-',
                'eye_bolt_na' => true,
                'eye_bolt_note' => '-',
                'eye_bolt_accept' => true,
                'eye_bolt_accept_note' => '-',
            ],
            [
                'pulley_replace' => true,
                'pulley_repair' => true,
                'pulley_na' => true,
                'pulley_note' => '-',
                'pulley_accept' => true,
                'pulley_accept_note' => '-',
            ],
            [
                'coupling_replace' => true,
                'coupling_repair' => true,
                'coupling_na' => true,
                'coupling_note' => '-',
                'coupling_accept' => true,
                'coupling_accept_note' => '-',
            ],
            [
                'rubber_coupling_replace' => true,
                'rubber_coupling_replace_note' => '-',
                'rubber_coupling_na' => true,
                'rubber_coupling_note' => '-',
                'rubber_coupling_accept' => true,
                'rubber_coupling_accept_note' => '-',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'others_components_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'others_components',
                'title' => 'Others Components'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('Components:'),
                new Span('Condition / Fault'),
                new Span('Instructions'),
                new Span('After repair'),
            ],
            [
                new Span('- Oil Seal (DE)'),
                new Input('oil_seal_de_replace', 'Replace', 'checkbox-l'),
                new Input('oil_seal_de_replace_note'),
                new Input('oil_seal_de_na', 'N/A', 'checkbox-l'),
                new Input('oil_seal_de_note'),
                new Input('oil_seal_de_accept', 'Accept', 'checkbox-l'),
                new Input('oil_seal_de_accept_note'),
            ],
            [
                new Span('- Oil Seal (NDE)'),
                new Input('oil_seal_nde_replace', 'Replace', 'checkbox-l'),
                new Input('oil_seal_nde_replace_note'),
                new Input('oil_seal_nde_na', 'N/A', 'checkbox-l'),
                new Input('oil_seal_nde_note'),
                new Input('oil_seal_nde_accept', 'Accept', 'checkbox-l'),
                new Input('oil_seal_nde_accept_note'),
            ],
            [
                new Span('- V-Ring (DE)'),
                new Input('v-ring_de_replace', 'Replace', 'checkbox-l'),
                new Input('v-ring_de_replace_note'),
                new Input('v-ring_de_na', 'N/A', 'checkbox-l'),
                new Input('v-ring_de_note'),
                new Input('v-ring_de_accept', 'Accept', 'checkbox-l'),
                new Input('v-ring_de_accept_note'),
            ],
            [
                new Span('- V-Ring (NDE)'),
                new Input('v-ring_nde_replace', 'Replace', 'checkbox-l'),
                new Input('v-ring_nde_replace_note'),
                new Input('v-ring_nde_na', 'N/A', 'checkbox-l'),
                new Input('v-ring_nde_note'),
                new Input('v-ring_nde_accept', 'Accept', 'checkbox-l'),
                new Input('v-ring_nde_accept_note'),
            ],
            [
                new Span('- Wave Spring'),
                new Input('wave_spring_replace', 'Replace', 'checkbox-l'),
                new Input('wave_spring_replace_note'),
                new Input('wave_spring_na', 'N/A', 'checkbox-l'),
                new Input('wave_spring_note'),
                new Input('wave_spring_accept', 'Accept', 'checkbox-l'),
                new Input('wave_spring_accept_note'),
            ], [
                new Span('- Eye Bolt'),
                new Input('eye_bolt_replace', 'Replace', 'checkbox-l'),
                new Input('eye_bolt_replace_note'),
                new Input('eye_bolt_na', 'N/A', 'checkbox-l'),
                new Input('eye_bolt_note'),
                new Input('eye_bolt_accept', 'Accept', 'checkbox-l'),
                new Input('eye_bolt_accept_note'),
            ],
            [
                new Span('- Pulley'),
                new Input('pulley_replace', 'Replace', 'checkbox-l'),
                new Input('pulley_repair', 'Repair', 'checkbox-l'),
                new Input('pulley_na', 'N/A', 'checkbox-l'),
                new Input('pulley_note'),
                new Input('pulley_accept', 'Accept', 'checkbox-l'),
                new Input('pulley_accept_note'),
            ],
            [
                new Span('- Coupling'),
                new Input('coupling_replace', 'Replace', 'checkbox-l'),
                new Input('coupling_repair', 'Repair', 'checkbox-l'),
                new Input('coupling_na', 'N/A', 'checkbox-l'),
                new Input('coupling_note'),
                new Input('coupling_accept', 'Accept', 'checkbox-l'),
                new Input('coupling_accept_note'),
            ],
            [
                new Span('- Rubber Coupling'),
                new Input('rubber_coupling_replace', 'Replace', 'checkbox-l'),
                new Input('rubber_coupling_replace_note'),
                new Input('rubber_coupling_na', 'N/A', 'checkbox-l'),
                new Input('rubber_coupling_note'),
                new Input('rubber_coupling_accept', 'Accept', 'checkbox-l'),
                new Input('rubber_coupling_accept_note'),
            ]
        ];
    }
}
