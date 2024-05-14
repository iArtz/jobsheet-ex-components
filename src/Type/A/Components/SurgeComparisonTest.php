<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class SurgeComparisonTest extends Component
{
    protected static array $compatibleWith = [
        MotorType::LV,
        MotorType::TwoSpeed
    ];

    protected static array $data = [
        'surge_comparison_test' => [
            [],
            [
                'incoming_volt' => 'i_volt',
                'incoming_na' => true,
                'incoming_good' => true,
                'incoming_ground' => true,
                'incoming_short_turn' => true,
                'incoming_short_phase' => true,
            ],
            [
                'final_volt' => 'f_volt',
                'final_na' => true,
                'final_good' => true,
                'final_ground' => true,
                'final_short_turn' => true,
                'final_short_phase' => true,
            ],
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'surge_comparison_test_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'surge_comparison_test',
                'title' => 'Surge Comparison Test'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('Volt (kVac.)'),
                new Span('SURGE COMPARISON TEST WAVE FORM')
            ],
            [
                new Input('incoming_volt', ''),
                new Span('Incoming'),
                new Input('incoming_na', 'N/A', 'checkbox-l'),
                new Input('incoming_good', 'Good', 'checkbox-l'),
                new Input('incoming_ground', 'Ground', 'checkbox-l'),
                new Input('incoming_short_turn', 'Short turn', 'checkbox-l'),
                new Input('incoming_short_phase', 'Short Phase', 'checkbox-l'),
            ],
            [
                new Input('final_volt', ''),
                new Span('Final'),
                new Input('final_na', 'N/A', 'checkbox-l'),
                new Input('final_good', 'Good', 'checkbox-l'),
                new Input('final_ground', 'Ground', 'checkbox-l'),
                new Input('final_short_turn', 'Short Turn', 'checkbox-l'),
                new Input('final_short_phase', 'Short Phase', 'checkbox-l'),
            ],
        ];
    }
}
