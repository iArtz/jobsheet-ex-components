<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Classes\Dropdown;
use Jobsheet\Ex\Utils\Helper;

class MachineDetailsDC extends MachineDetails
{
    protected static array $compatibleWith = [
        MotorType::DC
    ];

    protected static array $data = [
        'machine_details_dc' => [
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
                'arm-voltage' => 'Arm.Voltage',
                'arm-current' => 'Arm.Current',
                'temp-rise_class' => 'Temp.Rise Class',
                'duty' => 'Duty',
            ],
            [
                'field_voltage' => 'Field Voltage',
                'field_current' => 'Field Current',
                'ip' => 'IP',
                'sf' => 'SF',
            ],
            [
                'performance' => 'BS/IEC/Other (performance)'
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'machine_details_dc_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'machine_details_dc',
                'title' => 'Machine Details'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
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
                new Input('design', 'Design')
            ],
            [
                new Input('arm-voltage', 'Arm.Voltage'),
                new Span('V.'),
                new Input('arm-current', 'Arm.Current'),
                new Span('A.'),
                new Input('temp-rise_class', 'Temp.Rise Class'),
                new Input('duty', 'Duty'),
            ],
            [
                new Input('field_voltage', 'Field Voltage'),
                new Span('V.'),
                new Input('field_current', 'Field Current'),
                new Span('A.'),
                new Input('ip', 'IP'),
                new Input('sf', 'SF'),
            ],
            [
                new Input('performance', 'BS/IEC/Other (performance)')
            ]
        ];
    }
}
