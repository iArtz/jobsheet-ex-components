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
                'time_1' => '-',
                'voltage_r-s_1' => '-',
                'voltage_s-t_1' => '-',
                'voltage_t-r_1' => '-',
                'current_r_1' => '-',
                'current_s_1' => '-',
                'current_t_1' => '-',
                'speed_1_min_1' => '-',
                'temp_shaft_1' => '-',
                'temp_de_1' => '-',
                'temp_frame_1' => '-',
                'temp_nde_1' => '-',
                'temp_amb_1' => '-',
            ], [
                'time_2' => '-',
                'voltage_r-s_2' => '-',
                'voltage_s-t_2' => '-',
                'voltage_t-r_2' => '-',
                'current_r_2' => '-',
                'current_s_2' => '-',
                'current_t_2' => '-',
                'speed_1_min_2' => '-',
                'temp_shaft_2' => '-',
                'temp_de_2' => '-',
                'temp_frame_2' => '-',
                'temp_nde_2' => '-',
                'temp_amb_2' => '-',
            ], [
                'time_3' => '-',
                'voltage_r-s_3' => '-',
                'voltage_s-t_3' => '-',
                'voltage_t-r_3' => '-',
                'current_r_3' => '-',
                'current_s_3' => '-',
                'current_t_3' => '-',
                'speed_1_min_3' => '-',
                'temp_shaft_3' => '-',
                'temp_de_3' => '-',
                'temp_frame_3' => '-',
                'temp_nde_3' => '-',
                'temp_amb_3' => '-',
            ],
            [
                'time_4' => '-',
                'voltage_r-s_4' => '-',
                'voltage_s-t_4' => '-',
                'voltage_t-r_4' => '-',
                'current_r_4' => '-',
                'current_s_4' => '-',
                'current_t_4' => '-',
                'speed_1_min_4' => '-',
                'temp_shaft_4' => '-',
                'temp_de_4' => '-',
                'temp_frame_4' => '-',
                'temp_nde_4' => '-',
                'temp_amb_4' => '-',
            ],
            [
                'time_5' => '-',
                'voltage_r-s_5' => '-',
                'voltage_s-t_5' => '-',
                'voltage_t-r_5' => '-',
                'current_r_5' => '-',
                'current_s_5' => '-',
                'current_t_5' => '-',
                'speed_1_min_5' => '-',
                'temp_shaft_5' => '-',
                'temp_de_5' => '-',
                'temp_frame_5' => '-',
                'temp_nde_5' => '-',
                'temp_amb_5' => '-',
            ], [
                'time_6' => '-',
                'voltage_r-s_6' => '-',
                'voltage_s-t_6' => '-',
                'voltage_t-r_6' => '-',
                'current_r_6' => '-',
                'current_s_6' => '-',
                'current_t_6' => '-',
                'speed_1_min_6' => '-',
                'temp_shaft_6' => '-',
                'temp_de_6' => '-',
                'temp_frame_6' => '-',
                'temp_nde_6' => '-',
                'temp_amb_6' => '-',
            ],
            [
                'time_7' => '-',
                'voltage_r-s_7' => '-',
                'voltage_s-t_7' => '-',
                'voltage_t-r_7' => '-',
                'current_r_7' => '-',
                'current_s_7' => '-',
                'current_t_7' => '-',
                'speed_1_min_7' => '-',
                'temp_shaft_7' => '-',
                'temp_de_7' => '-',
                'temp_frame_7' => '-',
                'temp_nde_7' => '-',
                'temp_amb_7' => '-',
            ],
            [
                'final_id_no_1' => '-',
                'final_id_no_2' => '-',
                'final_id_no_3' => '-',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'running_test_final_mv_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
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
                new Input('time_1'),
                new Input('voltage_r-s_1'),
                new Input('voltage_s-t_1'),
                new Input('voltage_t-r_1'),
                new Input('current_r_1'),
                new Input('current_s_1'),
                new Input('current_t_1'),
                new Input('speed_1_min_1'),
                new Input('temp_shaft_1'),
                new Input('temp_de_1'),
                new Input('temp_frame_1'),
                new Input('temp_nde_1'),
                new Input('temp_amb_1'),
            ], [
                new Input('time_2'),
                new Input('voltage_r-s_2'),
                new Input('voltage_s-t_2'),
                new Input('voltage_t-r_2'),
                new Input('current_r_2'),
                new Input('current_s_2'),
                new Input('current_t_2'),
                new Input('speed_1_min_2'),
                new Input('temp_shaft_2'),
                new Input('temp_de_2'),
                new Input('temp_frame_2'),
                new Input('temp_nde_2'),
                new Input('temp_amb_2'),
            ], [
                new Input('time_3'),
                new Input('voltage_r-s_3'),
                new Input('voltage_s-t_3'),
                new Input('voltage_t-r_3'),
                new Input('current_r_3'),
                new Input('current_s_3'),
                new Input('current_t_3'),
                new Input('speed_1_min_3'),
                new Input('temp_shaft_3'),
                new Input('temp_de_3'),
                new Input('temp_frame_3'),
                new Input('temp_nde_3'),
                new Input('temp_amb_3'),
            ],
            [
                new Input('time_4'),
                new Input('voltage_r-s_4'),
                new Input('voltage_s-t_4'),
                new Input('voltage_t-r_4'),
                new Input('current_r_4'),
                new Input('current_s_4'),
                new Input('current_t_4'),
                new Input('speed_1_min_4'),
                new Input('temp_shaft_4'),
                new Input('temp_de_4'),
                new Input('temp_frame_4'),
                new Input('temp_nde_4'),
                new Input('temp_amb_4'),
            ],
            [
                new Input('time_5'),
                new Input('voltage_r-s_5'),
                new Input('voltage_s-t_5'),
                new Input('voltage_t-r_5'),
                new Input('current_r_5'),
                new Input('current_s_5'),
                new Input('current_t_5'),
                new Input('speed_1_min_5'),
                new Input('temp_shaft_5'),
                new Input('temp_de_5'),
                new Input('temp_frame_5'),
                new Input('temp_nde_5'),
                new Input('temp_amb_5'),
            ], [
                new Input('time_6'),
                new Input('voltage_r-s_6'),
                new Input('voltage_s-t_6'),
                new Input('voltage_t-r_6'),
                new Input('current_r_6'),
                new Input('current_s_6'),
                new Input('current_t_6'),
                new Input('speed_1_min_6'),
                new Input('temp_shaft_6'),
                new Input('temp_de_6'),
                new Input('temp_frame_6'),
                new Input('temp_nde_6'),
                new Input('temp_amb_6'),
            ],
            [
                new Input('time_7'),
                new Input('voltage_r-s_7'),
                new Input('voltage_s-t_7'),
                new Input('voltage_t-r_7'),
                new Input('current_r_7'),
                new Input('current_s_7'),
                new Input('current_t_7'),
                new Input('speed_1_min_7'),
                new Input('temp_shaft_7'),
                new Input('temp_de_7'),
                new Input('temp_frame_7'),
                new Input('temp_nde_7'),
                new Input('temp_amb_7'),
            ],
            [
                new Input('final_id_no_1', 'Instrument Final ID NO.'),
                new Input('final_id_no_2', 'ID NO.'),
                new Input('final_id_no_3', 'ID NO.'),
            ]
        ];
    }
}
