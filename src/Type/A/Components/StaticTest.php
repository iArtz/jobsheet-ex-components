<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class StaticTest extends Component
{
    protected static array $compatibleWith = [
        MotorType::DC,
        MotorType::LV,
        MotorType::MV,
        MotorType::SinglePhase,
        MotorType::TwoSpeed
    ];

    protected static array $data = [
        'static_test' => [
            [
                'incoming' => 'Incoming',
                'final' => 'Final',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'static_test_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'static_test',
                'title' => 'Static Test'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('Ambient Temperature'),
                new Input('incoming', 'Incoming'),
                new Span('°C'),
                new Input('final', 'Final'),
                new Span('°C'),
            ]
        ];
    }
}
