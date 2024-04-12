<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Form;
use Jobsheet\Ex\Classes\Fieldset;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Classes\Dropdown;

class MachineDetailsSinglePhase extends MachineDetails
{
    protected static array $compatibleWith = [
        MotorType::SinglePhase
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'machine_details_dc_form',
                'title' => '',
                'action' => '/api/ex/save'
            ],
            'fieldset' => [
                'name' => 'machine_details_single_phase',
                'title' => 'Machine Details'
            ]
        ];

        return static::createForm(json_decode(json_encode($config)));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Input('frame', 'Frame'),
                new Input('type', 'Type')
            ],
            [
                new Input('manufacture', 'Manufacture'),
                new Input('model', 'Model'),
                new Input('ser_no', 'Ser.No')
            ],
            [
                new Input('power', 'Power'),
                new Dropdown('power_unit', '', ['kW', 'HP', 'Nm', 'W']),
                new Input('speed', 'Speed'),
                new Dropdown('speed_unit', '', ['RPM', 'Pole']),
                new Input('insulation_class', 'Insulation Class'),
                new Input('ip', 'IP')
            ],
            [
                new Input('voltage', 'Voltage'),
                new Span('V.'),
                new Input('frequency', 'Frequency'),
                new Span('Hz.'),
                new Input('temp-rise_class', 'Temp.Rise Class'),
                new Input('cos', 'Cos.φ'),
            ],
            [
                new Input('current_a', 'Current'),
                new Span('A.'),
                new Input('cap-start_uF', 'Cap.Start'),
                new Span('uF.'),
                new Input('cap-start_v', 'V.'),
                new Input('cap-run', 'Cap.Run'),
                new Span('uF.'),
                new Input('cap-run_v', 'V.'),
            ],
            [
                new Input('performance', 'BS/IEC/Other (performance)')
            ]
        ];
    }

    public static function loadData(FormElement $form): void
    {
        $data = [
            'machine_details_single_phase' => [
                [
                    'frame' => 'Frame',
                    'type' => 'Type'
                ],
                [
                    'manufacture' => 'Manufacture',
                    'model' => 'Model',
                    'ser_no' => 'Ser.No'
                ],
                [
                    'power' => 'Power',
                    'power_unit' => 'W',
                    'speed' => 'Speed',
                    'speed_unit' => 'Pole',
                    'insulation_class' => 'Insulation Class',
                    'ip' => 'IP'
                ],
                [
                    'voltage' => 'Voltage',
                    'frequency' => 'Frequency',
                    'temp-rise_class' => 'Temp.Rise Class',
                    'cos' => 'Cos.φ',
                ],
                [
                    'current_a' => 'Current',
                    'cap-start_uF' => 'Cap.Start',
                    'cap-start_v' => 'V.',
                    'cap-run' => 'Cap.Run',
                    'cap-run_v' => 'V.',
                ],
                [
                    'performance' => 'BS/IEC/Other (performance)'
                ]
            ]
        ];

        $form->setData($data);
    }
}
