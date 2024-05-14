<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class Capacitor extends Component
{
    protected static array $compatibleWith = [
        MotorType::SinglePhase
    ];

    protected static array $data = [
        'capacitor' => [
            [],
            [
                'incoming_start_value' => '-',
                'incoming_start_good' => true,
                'incoming_start_fail' => true,
                'incoming_start_na' => true,

                'final_start_value' => '-',
                'final_start_good' => true,
                'final_start_fail' => true,
                'final_start_na' => true,
            ],
            [
                'incoming_run_value' => '-',
                'incoming_run_good' => true,
                'incoming_run_fail' => true,
                'incoming_run_na' => true,

                'final_run_value' => '-',
                'final_run_good' => true,
                'final_run_fail' => true,
                'final_run_na' => true,
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'capacitor_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name'        => 'capacitor',
                'title' => 'Capacitor'
            ]
        ];
        return static::createForm(Helper::arrayToObject($config));
    }

    public static function createElements(): array
    {
        return [
            [
                new Span('CAPACITOR (Incoming)'),
                new Span('CAPACITOR (Final)'),
            ],
            [
                new Input('incoming_start_value', 'Start'),
                new Span('uF.'),
                new Input('incoming_start_good', 'Good', 'checkbox-l'),
                new Input('incoming_start_fail', 'Fail', 'checkbox-l'),
                new Input('incoming_start_na', 'N/A', 'checkbox-l'),

                new Input('final_start_value', 'Start'),
                new Span('uF.'),
                new Input('final_start_good', 'Good', 'checkbox-l'),
                new Input('final_start_fail', 'Fail', 'checkbox-l'),
                new Input('final_start_na', 'N/A', 'checkbox-l')
            ], [
                new Input('incoming_run_value', 'Run'),
                new Span('uF.'),
                new Input('incoming_run_good', 'Good', 'checkbox-l'),
                new Input('incoming_run_fail', 'Fail', 'checkbox-l'),
                new Input('incoming_run_na', 'N/A', 'checkbox-l'),

                new Input('final_run_value', 'Run'),
                new Span('uF.'),
                new Input('final_run_good', 'Good', 'checkbox-l'),
                new Input('final_run_fail', 'Fail', 'checkbox-l'),
                new Input('final_run_na', 'N/A', 'checkbox-l')
            ]
        ];
    }
}
