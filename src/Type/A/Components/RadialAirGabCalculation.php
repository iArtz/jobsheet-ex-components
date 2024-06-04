<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class RadialAirGabCalculation extends Component
{
    protected static array $compatibleWith = [
        MotorType::DC,
        MotorType::LV,
        MotorType::MV,
        MotorType::SinglePhase,
        MotorType::TwoSpeed
    ];

    protected static array $data = [
        'radial_air_gab_calculation' => [

            [],
            [],
            [],
            [],
            [
                'D' => '-',
            ],
            [],
            [],
            [
                'f' => '-',
            ],
            [
                'p' => '-',
            ],
            [
                'L' => '-',
            ],
            [
                'is_rolling_bearing' => '-',
            ],
            [],
            [],
            [
                'minimum_radial_gap' => '-',
            ],
            [],
            [],
            [],
            [],
            [],
            []
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'radial_air_gab_calculation_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'radial_air_gab_calculation',
                'title' => 'Radial Air Gab Calculation'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('Rotor - Stator Radial Air Gap Calculation for Group II (non mining): Ex e (increased safety); BS EN50019, BS EN/IEC 60079-7 , Ex N / nA (non sparking) ;BS EN50021, BS EN/IEC 60079-15'),
            ],
            [
                new Span('Minimum permissible radial air gap from standard is:'),
            ],
            [
                new Span('{0.15 + [(D-50)/780][0.25 + (0.75n/1000)]} x r x b'),
            ],
            [
                new Span('Enter data from the motor being checked:'),
            ],
            [
                new Span('D is the rotor diameter in millimetres.  (D =75 for rotor diameters less than 75mm. D = 750 for rotor diameters greater than 750mm.)'),
                new Input('D'),
                new Span('enter'),
            ],
            [
                new Span('n = maximum rated speed in r/min.  (n = 1000 for speeds less than 1000 r/min.)'),
            ],
            [
                new Span('Calculated from f and p below.'),
            ],
            [
                new Span('Max frequency (from rating plate) (f in Hz)'),
                new Input('f'),
                new Span('enter'),
            ],
            [
                new Span('No of poles, p'),
                new Input('p'),
                new Span('enter'),
            ],
            [
                new Span('Core Length measured in mm, L'),
                new Input('L'),
                new Span('enter')
            ],
            [
                new Span('Is it a rolling bearing?  (enter Y or N)'),
                new Input('is_rolling_bearing'),
                new Span('enter')
            ],
            [
                new Span('( b = 1.0 for rolling bearings, info )'),
            ],
            [
                new Span('( b = 1.5 for plain bearings, info )'),
            ],
            [
                new Span('Minimum  Radial Gap '),
                new Input('minimum_radial_gap'),
                new Span('-'),
            ],
            [
                new Span(''),
            ],
            [
                new Span('Notes')
            ],
            [
                new Span('p (poles) = f (nominal frequency, Hz) x 120 / ns (synchronous speed)')
            ],
            [
                new Span('e.g. 50Hz, 1500 r/min,       p = 50 x 120 / 1500  =  4')
            ],
            [
                new Span('r = 1       (when the ratio of core length, L,  to rotor diameter, D, is less than 1.75)')
            ],
            [
                new Span('r = L / ( 1.75 X D )      (when the value of the expression is greater than 1)')
            ]
        ];
    }
}
