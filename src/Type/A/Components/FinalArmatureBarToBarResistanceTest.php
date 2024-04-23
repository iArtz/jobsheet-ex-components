<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class FinalArmatureBarToBarResistanceTest extends Component
{
    protected static array $compatibleWith = [
        MotorType::DC,
    ];

    private static function generateMockData()
    {
        for ($i = 1; $i <= 35; $i++) { // Row
            $col = [];
            for ($j = 1; $j <= 12; $j++) // Col
            {
                if ($j % 2 != 0) {
                    $col['bar_no_' . $i . '_' . $j] = $i . '_' . $j;
                } else {
                    $col['val_no_' . $i . '_' . $j] = $i . '_' . $j;
                }
            }
            static::$data['final_armature_bar_to_bar_resistance_test'][] = $col;
        }
    }

    protected static array $data = [
        'final_armature_bar_to_bar_resistance_test' => [
            ['total_bars' => 'total_bars'],
            [],
            [],
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'final_armature_bar_to_bar_resistance_test_form',
                'title' => '',
                'action' => '/api/ex/save'
            ],
            'fieldset' => [
                'name' => 'final_armature_bar_to_bar_resistance_test',
                'title' => 'Final Armature Bar To Bar Resistance Test'
            ]
        ];

        static::generateMockData();

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        $elements = [
            [
                new Input('total_bars', 'Total Bars'),
                new Span('Bars')
            ],
            [
                new Span('Incoming Resistance (mΩ)')
            ],
            [
                new Span('Bar No.'),
                new Span('Values'),
                new Span('Bar No.'),
                new Span('Values'),
                new Span('Bar No.'),
                new Span('Values'),
                new Span('Bar No.'),
                new Span('Values'),
                new Span('Bar No.'),
                new Span('Values'),
                new Span('Bar No.'),
                new Span('Values'),
            ]
        ];

        for ($i = 1; $i <= 35; $i++) { // Row
            $col = [];
            for ($j = 1; $j <= 12; $j++) // Col
            {
                if ($j % 2 != 0) {
                    $col[] = new Input('bar_no_' . $i . '_' . $j, '');
                } else {
                    $col[] = new Input('val_no_' . $i . '_' . $j, '');
                }
            }
            $elements[] = $col;
        }

        return $elements;
    }
}
