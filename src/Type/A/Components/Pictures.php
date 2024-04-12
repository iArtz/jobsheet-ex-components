<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Utils\Helper;

class Pictures extends Component
{
    protected static $compatibleWith = [
        MotorType::LV,
        MotorType::MV,
        MotorType::TwoSpeed,
        MotorType::SinglePhase
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'pictures_form',
                'title' => '',
                'action' => '/api/ex/save'
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
    }
    public static function loadData(FormElement $form): void
    {
    }
}
