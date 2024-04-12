<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Dropdown;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class CertificationDetails extends Component
{
    protected static array $compatibleWith = [
        MotorType::SinglePhase,
        MotorType::TwoSpeed,
        MotorType::LV,
        MotorType::MV,
        MotorType::DC
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'certification_details_form',
                'title' => '',
                'action' => '/api/ex/save'
            ],
            'fieldset' => [
                'name' => 'certification_details',
                'title' => 'Certification Details'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Input('ce_mark', 'CE Mark'),
                new Input('notified_body_no', 'Notified Body no'),
                new Input('certificate_no', 'Certificate No')
            ],
            [
                new Span('Motor Group'),
                new Dropdown('motor_group', '', ['I', 'II', 'III']),
                new Span('Gas Group'),
                new Dropdown('gas_group', '', ['A', 'B', 'C']),
                new Span('Equipment category'),
                new Dropdown('equipment_category', '', ['1', '2', '3']),
                new Span('Environment'),
                new Dropdown('environment', '', ['G (Gas)', 'D (Dust)', 'GD (Gas and Dust)']),
                new Span('Equipment protection level'),
                new Dropdown('equipment_protection_level', '', ['a', 'b', 'c']),
                new Span('Protection type'),
                new Dropdown('protection_type', '', ['Ex e', 'Ex nA', 'Ex N', 'Ex eb', 'Ex ec'])
            ],
            [
                new Input('ex', 'Ex'),
                new Input('te', 'tE'),
                new Input('ia-in', 'IA/IN'),
                new Input('ip', 'IP'),
                new Input('temperature_class', 'Temperature class'),
            ],
            [
                new Input('performance', 'BS/IEC/Other (performance)'),
                new Input('year_of_certificate', 'Year of Certificate'),
            ],
            [
                new Input('special_certificate', 'Special certificate or manufacturer\'s requirements')
            ]
        ];
    }

    public static function loadData(FormElement $form): void
    {
        $data = [
            'certification_details' => [
                [
                    'ce_mark' => 'CE Mark',
                    'notified_body_no' => 'Notified Body no',
                    'certificate_no' => 'Certificate No'
                ],
                [

                    'motor_group' => 'I',
                    'gas_group' => 'A',
                    'equipment_category' => '1',
                    'environment' => 'GD (Gas and Dust)',
                    'equipment_protection_level' => 'a',
                    'protection_type' => 'Ex e',
                ],
                [
                    'ex' => 'Ex',
                    'te' => 'tE',
                    'ia-in' => 'IA/IN',
                    'ip' => 'IP',
                    'temperature_class' => 'Temperature class',
                ],
                [
                    'performance' => 'BS/IEC/Other (performance)',
                    'year_of_certificate' => 'Year of Certificate'
                ],
                [

                    'special_certificate' => 'Special certificate or manufacturer\'s requirements'
                ]
            ]
        ];

        $form->setData($data);
    }
}
