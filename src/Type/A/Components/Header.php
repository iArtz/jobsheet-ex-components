<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Utils\Helper;

class Header extends Component
{
    protected static array $compatibleWith = [
        MotorType::SinglePhase,
        MotorType::TwoSpeed,
        MotorType::LV,
        MotorType::MV,
        MotorType::DC
    ];

    protected static array $data = [
        'header' => [
            [
                'single_phase' => true,
                '2_speed' => true,
                'lv' => true,
                'mv' => true,
                'dc' => true,
            ],
            [
                'job_no' => 'Job No',
                'incoming_date' => '2024-01-01',
                'delivery_date' => '2024-01-01',
            ],
            [
                'customer' => 'Customer',
                'tel' => '02-xxx-xxxx',
                'fax' => '02-xxx-xxxx'
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'header_form',
                'title' => "TEST REPORT FOR LV. EXPLOSION PROOF MOTOR (For Ex d, Ex de)",
                'action' => "/header_exd/save"
            ],
            'fieldset' => [
                'name' => 'header',
                'title' => 'Header'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Input('single_phase', 'Single Phase', 'checkbox'),
                new Input('2_speed', '2 Speed', 'checkbox'),
                new Input('lv', 'LV.', 'checkbox'),
                new Input('mv', 'MV.', 'checkbox'),
                new Input('dc', 'DC', 'checkbox'),
            ],
            [
                new Input('job_no', "Job No"),
                new Input('incoming_date', 'Incoming Date', 'date'),
                new Input('delivery_date', 'Delivery Date', 'date'),
            ],
            [
                new Input('customer', 'Customer'),
                new Input('tel', 'Tel', 'tel'),
                new Input('fax', 'Fax'),
            ]
        ];
    }
}
