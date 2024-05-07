<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class RunningTestFinalMV extends Component
{
    protected static array $compatibleWith = [
        MotorType::MV,
    ];

    protected static array $data = [

        'running_test_final_mv' => [
            [],
            [],
            [],
            [
                'time_1' => '1',
                'voltage_r-s_1' => '1',
                'voltage_s-t_1' => '1',
                'voltage_t-r_1' => '1',
                'current_r_1' => '1',
                'current_s_1' => '1',
                'current_t_1' => '1',
                'speed_1_min_1' => '1',
                'temp_shaft_1' => '1',
                'temp_de_1' => '1',
                'temp_frame_1' => '1',
                'temp_nde_1' => '1',
                'temp_amb_1' => '1',
            ], [
                'time_2' => '1',
                'voltage_r-s_2' => '1',
                'voltage_s-t_2' => '1',
                'voltage_t-r_2' => '1',
                'current_r_2' => '1',
                'current_s_2' => '1',
                'current_t_2' => '1',
                'speed_1_min_2' => '1',
                'temp_shaft_2' => '1',
                'temp_de_2' => '1',
                'temp_frame_2' => '1',
                'temp_nde_2' => '1',
                'temp_amb_2' => '1',
            ], [
                'time_3' => '1',
                'voltage_r-s_3' => '1',
                'voltage_s-t_3' => '1',
                'voltage_t-r_3' => '1',
                'current_r_3' => '1',
                'current_s_3' => '1',
                'current_t_3' => '1',
                'speed_1_min_3' => '1',
                'temp_shaft_3' => '1',
                'temp_de_3' => '1',
                'temp_frame_3' => '1',
                'temp_nde_3' => '1',
                'temp_amb_3' => '1',
            ],
            [
                'time_4' => '1',
                'voltage_r-s_4' => '1',
                'voltage_s-t_4' => '1',
                'voltage_t-r_4' => '1',
                'current_r_4' => '1',
                'current_s_4' => '1',
                'current_t_4' => '1',
                'speed_1_min_4' => '1',
                'temp_shaft_4' => '1',
                'temp_de_4' => '1',
                'temp_frame_4' => '1',
                'temp_nde_4' => '1',
                'temp_amb_4' => '1',
            ],
            [
                'time_5' => '1',
                'voltage_r-s_5' => '1',
                'voltage_s-t_5' => '1',
                'voltage_t-r_5' => '1',
                'current_r_5' => '1',
                'current_s_5' => '1',
                'current_t_5' => '1',
                'speed_1_min_5' => '1',
                'temp_shaft_5' => '1',
                'temp_de_5' => '1',
                'temp_frame_5' => '1',
                'temp_nde_5' => '1',
                'temp_amb_5' => '1',
            ], [
                'time_6' => '1',
                'voltage_r-s_6' => '1',
                'voltage_s-t_6' => '1',
                'voltage_t-r_6' => '1',
                'current_r_6' => '1',
                'current_s_6' => '1',
                'current_t_6' => '1',
                'speed_1_min_6' => '1',
                'temp_shaft_6' => '1',
                'temp_de_6' => '1',
                'temp_frame_6' => '1',
                'temp_nde_6' => '1',
                'temp_amb_6' => '1',
            ],
            [
                'time_7' => '1',
                'voltage_r-s_7' => '1',
                'voltage_s-t_7' => '1',
                'voltage_t-r_7' => '1',
                'current_r_7' => '1',
                'current_s_7' => '1',
                'current_t_7' => '1',
                'speed_1_min_7' => '1',
                'temp_shaft_7' => '1',
                'temp_de_7' => '1',
                'temp_frame_7' => '1',
                'temp_nde_7' => '1',
                'temp_amb_7' => '1',
            ],
            [
                'final_id_no_1' => 'Instrument Final ID NO.',
                'final_id_no_2' => 'ID NO.',
                'final_id_no_3' => 'ID NO.',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'running_test_final_mv_form',
                'title' => '',
                'action' => '/api/ex/save'
            ],
            'fieldset' => [
                'name' => 'running_test_final_mv',
                'title' => 'RUNNING TEST (FINAL)'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('RUNNING TEST'),
            ],
            [
                new Span(''),
                new Span(''),
                new Span('Voltage (V.)'),
                new Span(''),
                new Span('Current (A.)'),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span(''),
                new Span('Temperature °C'),
                new Span(''),
                new Span(''),
            ],
            [
                new Span('Time'),
                new Span('R-S'),
                new Span('S-T'),
                new Span('T-R'),
                new Span('R'),
                new Span('S'),
                new Span('T'),
                new Span('Speed (1/min.)'),
                new Span('SHAFT'),
                new Span('DE'),
                new Span('FRAME'),
                new Span('NDE'),
                new Span('AMB'),
            ],
            [
                new Input('time_1', ''),
                new Input('voltage_r-s_1', ''),
                new Input('voltage_s-t_1', ''),
                new Input('voltage_t-r_1', ''),
                new Input('current_r_1', ''),
                new Input('current_s_1', ''),
                new Input('current_t_1', ''),
                new Input('speed_1_min_1', ''),
                new Input('temp_shaft_1', ''),
                new Input('temp_de_1', ''),
                new Input('temp_frame_1', ''),
                new Input('temp_nde_1', ''),
                new Input('temp_amb_1', ''),
            ], [
                new Input('time_2', ''),
                new Input('voltage_r-s_2', ''),
                new Input('voltage_s-t_2', ''),
                new Input('voltage_t-r_2', ''),
                new Input('current_r_2', ''),
                new Input('current_s_2', ''),
                new Input('current_t_2', ''),
                new Input('speed_1_min_2', ''),
                new Input('temp_shaft_2', ''),
                new Input('temp_de_2', ''),
                new Input('temp_frame_2', ''),
                new Input('temp_nde_2', ''),
                new Input('temp_amb_2', ''),
            ], [
                new Input('time_3', ''),
                new Input('voltage_r-s_3', ''),
                new Input('voltage_s-t_3', ''),
                new Input('voltage_t-r_3', ''),
                new Input('current_r_3', ''),
                new Input('current_s_3', ''),
                new Input('current_t_3', ''),
                new Input('speed_1_min_3', ''),
                new Input('temp_shaft_3', ''),
                new Input('temp_de_3', ''),
                new Input('temp_frame_3', ''),
                new Input('temp_nde_3', ''),
                new Input('temp_amb_3', ''),
            ],
            [
                new Input('time_4', ''),
                new Input('voltage_r-s_4', ''),
                new Input('voltage_s-t_4', ''),
                new Input('voltage_t-r_4', ''),
                new Input('current_r_4', ''),
                new Input('current_s_4', ''),
                new Input('current_t_4', ''),
                new Input('speed_1_min_4', ''),
                new Input('temp_shaft_4', ''),
                new Input('temp_de_4', ''),
                new Input('temp_frame_4', ''),
                new Input('temp_nde_4', ''),
                new Input('temp_amb_4', ''),
            ],
            [
                new Input('time_5', ''),
                new Input('voltage_r-s_5', ''),
                new Input('voltage_s-t_5', ''),
                new Input('voltage_t-r_5', ''),
                new Input('current_r_5', ''),
                new Input('current_s_5', ''),
                new Input('current_t_5', ''),
                new Input('speed_1_min_5', ''),
                new Input('temp_shaft_5', ''),
                new Input('temp_de_5', ''),
                new Input('temp_frame_5', ''),
                new Input('temp_nde_5', ''),
                new Input('temp_amb_5', ''),
            ], [
                new Input('time_6', ''),
                new Input('voltage_r-s_6', ''),
                new Input('voltage_s-t_6', ''),
                new Input('voltage_t-r_6', ''),
                new Input('current_r_6', ''),
                new Input('current_s_6', ''),
                new Input('current_t_6', ''),
                new Input('speed_1_min_6', ''),
                new Input('temp_shaft_6', ''),
                new Input('temp_de_6', ''),
                new Input('temp_frame_6', ''),
                new Input('temp_nde_6', ''),
                new Input('temp_amb_6', ''),
            ],
            [
                new Input('time_7', ''),
                new Input('voltage_r-s_7', ''),
                new Input('voltage_s-t_7', ''),
                new Input('voltage_t-r_7', ''),
                new Input('current_r_7', ''),
                new Input('current_s_7', ''),
                new Input('current_t_7', ''),
                new Input('speed_1_min_7', ''),
                new Input('temp_shaft_7', ''),
                new Input('temp_de_7', ''),
                new Input('temp_frame_7', ''),
                new Input('temp_nde_7', ''),
                new Input('temp_amb_7', ''),
            ],
            [
                new Input('final_id_no_1', 'Instrument Final ID NO.'),
                new Input('final_id_no_2', 'ID NO.'),
                new Input('final_id_no_3', 'ID NO.'),
            ]
        ];
    }
}
