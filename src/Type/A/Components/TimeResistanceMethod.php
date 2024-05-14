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
                    'data' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
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
