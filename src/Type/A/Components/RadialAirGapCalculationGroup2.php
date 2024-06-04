<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class RadialAirGapCalculationGroup2 extends Component
{
    protected static array $compatibleWith = [
        MotorType::DC,
        MotorType::LV,
        MotorType::MV,
        MotorType::SinglePhase,
        MotorType::TwoSpeed
    ];

    protected static array $data = [
        'radial_air_gap_calc_group_2' => [
            [],
            [
                'img_1' => 'assets/images/radial_air_gap_calc_group_2.png'
            ],
            [],
            [],
            [],
            [],
            [
                'a1' => '-',
                'b1' => '-',
            ], [
                'a2' => '-',
                'b2' => '-',
            ],
            [
                'ecl_a' => '-',
                'ecl_b' => '-',
            ],
            [],
            [
                'bearing_housing_min_nde' => '-',
                'bearing_housing_min_de' => '-',
            ],
            [
                'bearing_housing_min_nde' => '-',
                'bearing_housing_min_de' => '-',
            ],
            [
                'hcl_nde' => '-',
                'hcl_de' => '-',
            ],
            [],
            [
                's_nde' => '-',
                's_de' => '-',
            ],
            [
                'r_nde' => '-',
                'r_de' => '-',
            ],
            [
                'agcl_nde' => '-',
                'agcl_de' => '-'
            ],
            [], [
                'bearing_tolerance_nde' => '-',
                'bearing_tolerance_de' => '-',
            ],
            [
                'agcl_nde' => '-',
                'agcl_de' => '-',
            ],
            [
                'calc_min_radial_air_gap_nde' => '-',
                'calc_min_radial_air_gap_de' => '-',
            ], [
                'is_pass_nde' => '-',
                'is_pass_de' => '-',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'radial_air_gap_calc_group_2_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'radial_air_gap_calc_group_2',
                'title' => 'Radial Air Gap Calc Group 2'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('Radial Air Gap Calculation. Group II (Surface): Ex e (increased safety) ;BS EN50019, BS EN/IEC 60079- 7,  Ex N / nA (non sparking) ; BS EN50021, BS EN/ IEC 60079- 15')
            ],
            [
                new Input('img_1', '', 'image'),
            ],
            [
                new Span('Note: Most Ex e & n motors do not have bearings held in a separate sub-assembly but where one is provided, then the additional tolerances, where applicable, must be taken into consideration. It is also assumed that there is no gap between the end shield and the bearing, if there is, then this also will require to be included.')
            ],
            [
                new Span('', ['my-3']),
            ],
            [
                new Span(''),
                new Span('NDE'),
                new Span(''),
                new Span('DE'),
            ],
            [
                new Span('End shield gap', ['font-bold']),
                new Span('(Measured Value mm)'),
                new Span('End shield gap', ['font-bold', 'text-left']),
                new Span('(Measured Value mm)')
            ],
            [
                new Span('Logically larger spigot dia <span class="font-bold text-red-500">A1</span>'),
                new input('a1'),
                new Span('Logically larger spigot dia <span class="font-bold text-red-500">B1</span>'),
                new input('b1'),
            ], [
                new Span('Logically smaller spigot dia <span class="font-bold text-red-500">A2</span>'),
                new input('a2'),
                new Span('Logically smaller spigot dia <span class="font-bold text-red-500">B2</span>'),
                new input('b2'),
            ],
            [
                new Span('Radial Difference <span class="font-bold text-red-500">Ecl</span> = (A1-A2)'),
                new input('ecl_a'),
                new Span('Radial Difference <span class="font-bold text-red-500">Ecl</span> = (B1-B2)'),
                new input('ecl_b'),
            ],
            [
                new Span('Bearing - housing', ['font-bold']),
                new Span(''),
                new Span('Bearing housings', ['font-bold']),
                new Span(''),
            ],
            [
                new Span('Max  bearing housing dia  <span class="font-bold text-red-500">NDE</span>'),
                new Input('bearing_housing_min_nde'),
                new Span('Max  bearing housing dia  <span class="font-bold text-red-500">DE</span>'),
                new Input('bearing_housing_min_de'),
            ],
            [
                new Span('Min outer bearing  dia <span class="font-bold text-red-500">NDE</span>'),
                new Input('bearing_housing_min_nde'),
                new Span('Min bearing outside dia <span class="font-bold text-red-500">DE</span>'),
                new Input('bearing_housing_min_de'),
            ],
            [
                new Span('Brg Hsg - Brg   <span class="font-bold text-red-500">Hcl NDE</span>'),
                new Input('hcl_nde'),
                new Span('Brg Hsg - Brg   <span class="font-bold text-red-500">Hcl DE</span>'),
                new Input('hcl_de'),
            ],
            [
                new Span('Airgap', ['font-bold']),
                new Span(''),
                new Span('Airgap', ['font-bold']),
                new Span(''),
            ],
            [
                new Span('Minimum Stator Core Dia <span class="font-bold text-red-500">S NDE</span>'),
                new Input('s_nde'),
                new Span('Minimum Stator Core Dia <span class="font-bold text-red-500">S DE</span>'),
                new Input('s_de'),
            ],
            [
                new Span('Maximum Rotor Dia <span class="font-bold text-red-500">R NDE</span>'),
                new Input('r_nde'),
                new Span('Maximum Rotor Dia <span class="font-bold text-red-500">R DE</span>'),
                new Input('r_de'),
            ],
            [
                new Span('Radial Clearance <span class="font-bold">AGcl</span> <span class="font-bold text-red-500">NDE</span><br /><span class="font-bold">AGcl = ( S NDE - R NDE ) ÷ 2</span>'),
                new Input('agcl_nde'),
                new Span('Radial Clearance <span class="font-bold">AGcl</span> <span class="font-bold text-red-500">DE</span><br /><span class="font-bold">AGcl = ( S NDE - R NDE ) ÷ 2</span>'),
                new Input('agcl_de')
            ],
            [
                new Span(''),
                new Span('NDE mm'),
                new Span('DE mm'),
            ], [
                new Span("Bearing Tolerance (from manfacturer's data)"),
                new Input('bearing_tolerance_nde'),
                new Input('bearing_tolerance_de'),
            ],
            [
                new Span('<span class="text-red-500">Actual (Measured) Minimum Radial Air Gap</span><br />=   AGcl   -   (  Ecl  +  Bearing Tolerance   +  Hcl  )'),
                new Input('agcl_nde'),
                new Input('agcl_de'),
            ],
            [
                new Span('Calculated Minimum Radial Air Gap from Sheet 4'),
                new Input('calc_min_radial_air_gap_nde'),
                new Input('calc_min_radial_air_gap_de'),
            ], [
                new Span('Pass or Fail each end'),
                new Input('is_pass_nde'),
                new Input('is_pass_de'),
            ]
        ];
    }
}
