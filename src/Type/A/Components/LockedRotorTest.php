<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class LockedRotorTest extends Component
{
    protected static array $compatibleWith = [
        MotorType::LV,
        MotorType::TwoSpeed,
    ];

    protected static array $data = [
        'locked_rotor_test' => [
            [],
            [],
            [ // Incoming
                'incoming_rated' => 'incoming_rated',
                'incoming_voltage' => 'incoming_voltage',
                'incoming_curr_a_r' => 'incoming_curr_a_r',
                'incoming_curr_a_s' => 'incoming_curr_a_s',
                'incoming_curr_a_t' => 'incoming_curr_a_t',
                'incoming_diff' => 'incoming_diff',
                // Incoming
                'final_rated' => 'final_rated',
                'final_voltage' => 'final_voltage',
                'final_curr_a_r' => 'final_curr_a_r',
                'final_curr_a_s' => 'final_curr_a_s',
                'final_curr_a_t' => 'final_curr_a_t',
                'final_diff' => 'final_diff',
            ],
            [
                'incoming_id_no_1' => 'Instrument Incoming ID No.',
                'incoming_id_no_2' => 'ID No.',
                'final_id_no_1' => 'Instrument final ID No.',
                'final_id_no_2' => 'ID No.',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'locked_rotor_test_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'locked_rotor_test',
                'title' => 'LOCKED ROTOR TEST'
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
                new Span('% Rated'),
                new Span('Voltage (V.)'),
                new Span('Curr (A.) R'),
                new Span('Curr (A.) S'),
                new Span('Curr (A.) T'),
                new Span('% Diff'),
                // Final
                new Span('% Rated'),
                new Span('Voltage (V.)'),
                new Span('Curr (A.) R'),
                new Span('Curr (A.) S'),
                new Span('Curr (A.) T'),
                new Span('% Diff'),
            ], [
                // Incoming
                new Input('incoming_rated'),
                new Input('incoming_voltage'),
                new Input('incoming_curr_a_r'),
                new Input('incoming_curr_a_s'),
                new Input('incoming_curr_a_t'),
                new Input('incoming_diff'),
                // Incoming
                new Input('final_rated'),
                new Input('final_voltage'),
                new Input('final_curr_a_r'),
                new Input('final_curr_a_s'),
                new Input('final_curr_a_t'),
                new Input('final_diff'),
            ],
            [
                new Input('incoming_id_no_1', 'Instrument Incoming ID No.'),
                new Input('incoming_id_no_2', 'ID No.'),
                new Input('final_id_no_1', 'Instrument final ID No.'),
                new Input('final_id_no_2', 'ID No.'),
            ]
        ];
    }
}
