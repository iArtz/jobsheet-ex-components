<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class Connection extends Component
{
    protected static array $compatibleWith = [
        MotorType::LV,
        MotorType::MV,
    ];

    protected static array $data = [
        'connection' => [
            [],
            [
                // Incoming
                'incoming_connection_delta' => true,
                'incoming_connection_star' => true,
                'incoming_connection_other' => [
                    true,
                    'Incoming'
                ],
                'incoming_connection_na' => true,
                // Final
                'final_connection_delta' => true,
                'final_connection_star' => true,
                'final_connection_other' =>
                [
                    true,
                    'Final'
                ],
                'final_connection_na' => true,
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'connection_form',
                'title' => '',
                'action' => '/api/ex/save'
            ],
            'fieldset' => [
                'name' => 'connection',
                'title' => 'Connection'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('INCOMING CONNECTION'),
                new Span('FINAL CONNECTION')
            ],
            [
                // Incoming
                new Input('incoming_connection_delta', 'Delta', 'checkbox-l'),
                new Input('incoming_connection_star', 'Star', 'checkbox-l'),
                new Input('incoming_connection_other', '', 'checkbox-text'),
                new Input('incoming_connection_na', 'N/A', 'checkbox-l'),
                // Final
                new Input('final_connection_delta', 'Delta', 'checkbox-l'),
                new Input('final_connection_star', 'Star', 'checkbox-l'),
                new Input('final_connection_other', '', 'checkbox-text'),
                new Input('final_connection_na', 'N/A', 'checkbox-l'),
            ],

        ];
    }
}
