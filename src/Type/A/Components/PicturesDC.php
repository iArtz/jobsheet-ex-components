<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Utils\Helper;

class PicturesDC extends Pictures
{
    protected static array $compatibleWith = [
        MotorType::DC
    ];

    protected static array $data = [
        'pictures_dc' => [
            [
                'cw' => true,
                'ccw' => true,
                'na' => true,
            ],
            [
                'brush_arm_45' => true,
                'brush_arm_90' => true,
            ],
            [
                'sm-circle_135' => true,
                'sm-circle_45' => true,
                'sm-circle_315' => true,
                'sm-circle_235' => true,
            ],
            [

                'md-circle_90' => true,
                'md-circle_360' => true,
                'md-circle_270' => true,
                'md-circle_180' => true,
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'pictures_dc_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'pictures_dc',
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
                new Input('brush_arm_45', 'Brush arm 45 °C', 'checkbox'),
                new Input('brush_arm_90', 'Brush arm 90 °C', 'checkbox'),
            ],
            [
                new Input('sm-circle_135', '135 °C', 'checkbox'),
                new Input('sm-circle_45', '45 °C', 'checkbox'),
                new Input('sm-circle_315', '315 °C', 'checkbox'),
                new Input('sm-circle_235', '235 °C', 'checkbox'),
            ],
            [

                new Input('md-circle_90', '90 °C', 'checkbox'),
                new Input('md-circle_360', '360 °C', 'checkbox'),
                new Input('md-circle_270', '270 °C', 'checkbox'),
                new Input('md-circle_180', '180 °C', 'checkbox'),
            ]
        ];
    }
}
