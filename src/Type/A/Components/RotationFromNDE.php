<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class RotationFromNDE extends Component
{
    protected static array $compatibleWith = [
        MotorType::LV,
        MotorType::MV,
        MotorType::TwoSpeed,
        MotorType::SinglePhase,
        MotorType::DC
    ];

    protected static array $data = [
        'rotation_from_nde' => [
            [],
            [
                // Incoming
                'incoming_rotation_nde_cw' => [true, 'https://placehold.co/20x20/black/pink'],
                'incoming_rotation_nde_ccw' => [true, 'https://placehold.co/20x20/black/pink'],
                'incoming_rotation_nde_na' => true,
                // Final
                'final_rotation_nde_cw' => [true, 'https://placehold.co/20x20/black/pink'],
                'final_rotation_nde_ccw' => [true, 'https://placehold.co/20x20/black/pink'],
                'final_rotation_nde_na' => true,
            ],
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'rotation_from_nde_form',
                'title' => '',
                'action' => '/api/ex/save'
            ],
            'fieldset' => [
                'name' => 'rotation_from_nde',
                'title' => 'ROTATION FROM NDE'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('INCOMING'),
                new Span('FINAL')
            ],
            [
                // Incoming
                new Input('incoming_rotation_nde_cw', 'CW', 'checkbox-image'),
                new Input('incoming_rotation_nde_ccw', 'CCW', 'checkbox-image'),
                new Input('incoming_rotation_nde_na', 'N/A', 'checkbox-l'),
                // Final
                new Input('final_rotation_nde_cw', 'CW', 'checkbox-image'),
                new Input('final_rotation_nde_ccw', 'CCW', 'checkbox-image'),
                new Input('final_rotation_nde_na', 'N/A', 'checkbox-l'),
            ],

        ];
    }
}
