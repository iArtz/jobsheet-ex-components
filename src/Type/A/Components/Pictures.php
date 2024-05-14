<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Utils\Helper;

class Pictures extends Component
{
    protected static array $compatibleWith = [
        MotorType::LV,
        MotorType::MV,
        MotorType::TwoSpeed,
        MotorType::SinglePhase,
    ];

    protected static array $data = [
        'pictures' => [
            [
                'cw' => true,
                'ccw' => true,
                'na' => true,
            ],
            [
                'incoming_picture' => 'https://placehold.co/300x200/orange/blue',
                'final_picture' => 'https://placehold.co/300x200/orange/blue',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'pictures_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'pictures',
                'title' => 'Pictures'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('Rotation from NDE'),
                new Input('cw', 'CW', 'checkbox'),
                new Input('na', 'N/A', 'checkbox'),
                new Input('ccw', 'CCW', 'checkbox'),
            ],
            [
                new Input('incoming_picture', 'INCOMING PICTURE', 'image'),
                new Input('final_picture', 'FINAL PICTURE', 'image'),
            ]
        ];
    }
}
