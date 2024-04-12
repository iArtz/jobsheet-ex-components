<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Dropdown;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;

class MachineDetails extends Component
{
    public static array $compatibleWith = [
        MotorType::LV,
        MotorType::MV,
        MotorType::TwoSpeed
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'machine_details_form',
                'title' => '',
                'action' => '/api/ex/save'
            ],
            'fieldset' => [
                'name' => 'machine_details',
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
                new Input('type', 'Type'),
            ],
            [
                new Input('manufacture', 'Manufacture'),
                new Input('model', 'Model'),
                new Input('ser_no', 'Ser.No'),
            ],
            [
                new Input('power', 'Power'),
                new Dropdown('power_unit', '', ['kW', 'HP', 'Nm', 'W']),
                new Input('speed', 'Speed'),
                new Dropdown('speed_unit', '', ['RPM', 'Pole']),
                new Input('insulation_class', 'Insulation Class'),
                new Input('design', 'Design'),
            ],
            [
                new Input('voltage', 'Voltage'),
                new Span('V.'),
                new Input('frequency', 'Frequency'),
                new Span('Hz.'),
                new Input('temp-rise_class', 'Temp.Rise Class'),
                new Input('duty', 'Duty'),
            ],
            [
                new Input('current', 'Current'),
                new Span('A.'),
                new Input('cos', 'Cos.φ'),
                new Input('ip', 'IP'),
                new Input('sf', 'SF'),
            ],
            [
                new Input('performance', 'BS/IEC/Other (performance)'),
            ],
        ];
    }

    public static function loadData(FormElement $form): void
    {
        $data = [
            'machine_details' => [
                [
                    'frame' => 'Frame',
                    'type' => 'Type',
                ],
                [

                    'manufacture' => 'Manufacture',
                    'model' => 'Model',
                    'ser_no' => 'Ser.No',
                ],
                [

                    'power' => 'Power',
                    'power_unit', '', ['kW', 'HP', 'Nm' => 'W'],
                    'speed' => 'Speed',
                    'speed_unit', '', ['RPM' => 'Pole'],
                    'insulation_class' => 'Insulation Class',
                    'design' => 'Design',
                ],
                [
                    'voltage' => 'Voltage',
                    'frequency' => 'Frequency',
                    'temp-rise_class' => 'Temp.Rise Class',
                    'duty' => 'Duty',
                ],
                [
                    'current' => 'Current',
                    'cos' => 'Cos.φ',
                    'ip' => 'IP',
                    'sf' => 'SF',
                ],
                [
                    'performance' => 'BS/IEC/Other (performance)'
                ]
            ]
        ];

        $form->setData($data);
    }
}
