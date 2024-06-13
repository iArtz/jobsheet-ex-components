<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Chart;
use Jobsheet\Ex\Utils\Helper;

class TimeResistanceMethod extends Component
{
    protected static array $compatibleWith = [
        MotorType::MV,
    ];

    protected static array $data = [
        'time_resistance_method' => [
            [
                'chart_01' => [
                    'title' => 'Demo',
                    'type' => 'line',
                    'datasets' => [
                        [
                            'label' => 'A',
                            'data' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                            'color' => '255,0,0'
                        ],
                        [
                            'label' => 'B',
                            'data' => [2, 4, 6, 8, 10, 12, 14, 16, 18, 20],
                            'color' => '0,255,0'
                        ],
                        [
                            'label' => 'C',
                            'data' => [4, 8, 12, 16, 20, 24, 28, 32, 36, 40],
                            'color' => '0,0,255'
                        ],
                        [
                            'label' => 'D',
                            'data' => [8, 16, 24, 32, 40, 48, 56, 64, 72, 80],
                            'color' => '255,255,0'
                        ]
                    ]
                ]
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'time_resistance_method_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'time_resistance_method',
                'title' => 'Time Resistance Method'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Chart([
                    'name' => 'chart_01',
                ]),
            ]
        ];
    }
}
