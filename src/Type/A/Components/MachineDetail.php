<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Container;
use Jobsheet\Ex\Classes\Dropdown;
use Jobsheet\Ex\Classes\Fieldset;
use Jobsheet\Ex\Classes\Form;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;

class MachineDetail extends Component
{
    protected static array $compatibleWith = [
        MotorType::LV,
        MotorType::MV,
        MotorType::TwoSpeed
    ];

    public static function build(): FormElement
    {
        $form = new Form('machine_detail', '', '/api/ex/save');
        $group = new Fieldset('Machine Details', 'Machine Details (' . join(', ', static::$compatibleWith) . ')');
        $container = new Container;
        static::combineElements($container);
        $group->add($container);
        $form->add($group);
        return $form;
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
}
