<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class SurgeComparisonTestDC extends Component
{
    protected static array $compatibleWith = [
        MotorType::DC
    ];

    protected static array $data = [
        'surge_comparison_test' => [
            [
                'wave_form_good' => true,
                'wave_form_ground' => true,
                'wave_form_short_turn' => true,
            ],
            [],
            [
                'incoming_test_at' => 'Test at.',
                'final_test_at' => 'Test at.',
            ],
            [
                'incoming_armature_na' => true,
                'incoming_armature_good' => true,
                'incoming_armature_ground' => true,
                'incoming_armature_short_turn' => true,
                'final_armature_na' => true,
                'final_armature_good' => true,
                'final_armature_ground' => true,
                'final_armature_short_turn' => true,
            ],
            [
                'incoming_interpole_na' => true,
                'incoming_interpole_good' => true,
                'incoming_interpole_ground' => true,
                'incoming_interpole_short_turn' => true,
                'final_interpole_na' => true,
                'final_interpole_good' => true,
                'final_interpole_ground' => true,
                'final_interpole_short_turn' => true, 'Short Turn', 'checkbox-l'
            ],
            [
                'incoming_compensets_na' => true,
                'incoming_compensets_good' => true,
                'incoming_compensets_ground' => true,
                'incoming_compensets_short_turn' => true,
                'final_compensets_na' => true,
                'final_compensets_good' => true,
                'final_compensets_ground' => true,
                'final_compensets_short_turn' => true,
            ],
            [
                'incoming_shunt_field_na' => true,
                'incoming_shunt_field_good' => true,
                'incoming_shunt_field_ground' => true,
                'incoming_shunt_field_short_turn' => true,
                'final_shunt_field_na' => true,
                'final_shunt_field_good' => true,
                'final_shunt_field_ground' => true,
                'final_shunt_field_short_turn' => true,
            ], [
                'incoming_series_field_na' => true,
                'incoming_series_field_good' => true,
                'incoming_series_field_ground' => true,
                'incoming_series_field_short_turn' => true,
                'final_series_field_na' => true,
                'final_series_field_good' => true,
                'final_series_field_ground' => true,
                'final_series_field_short_turn' => true,
            ],
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'surge_comparison_test_dc_form',
                'title' => '',
                'action' => '/api/ex/save'
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
                new Span('SURGE COMPARISON TEST WAVE FORM'),
                new Input('wave_form_good', 'Good', 'checkbox'),
                new Input('wave_form_ground', 'Ground', 'checkbox'),
                new Input('wave_form_short_turn', 'Short Turn', 'checkbox')
            ],
            [
                new Span('Incoming'),
                new Span('Final'),
            ],
            [
                new Span('Call Type'),
                new Input('incoming_test_at', 'Test at.'),
                new Span('kVac.'),
                new Input('final_test_at', 'Test at.'),
                new Span('kVac.')
            ],
            [
                new Span('Armature'),
                new Input('incoming_armature_na', 'N/A', 'checkbox-l'),
                new Input('incoming_armature_good', 'Good', 'checkbox-l'),
                new Input('incoming_armature_ground', 'Ground', 'checkbox-l'),
                new Input('incoming_armature_short_turn', 'Short Turn', 'checkbox-l'),
                new Input('final_armature_na', 'N/A', 'checkbox-l'),
                new Input('final_armature_good', 'Good', 'checkbox-l'),
                new Input('final_armature_ground', 'Ground', 'checkbox-l'),
                new Input('final_armature_short_turn', 'Short Turn', 'checkbox-l')
            ],
            [
                new Span('Interpole'),
                new Input('incoming_interpole_na', 'N/A', 'checkbox-l'),
                new Input('incoming_interpole_good', 'Good', 'checkbox-l'),
                new Input('incoming_interpole_ground', 'Ground', 'checkbox-l'),
                new Input('incoming_interpole_short_turn', 'Short Turn', 'checkbox-l'),
                new Input('final_interpole_na', 'N/A', 'checkbox-l'),
                new Input('final_interpole_good', 'Good', 'checkbox-l'),
                new Input('final_interpole_ground', 'Ground', 'checkbox-l'),
                new Input('final_interpole_short_turn', 'Short Turn', 'checkbox-l')
            ],
            [
                new Span('Compensets'),
                new Input('incoming_compensets_na', 'N/A', 'checkbox-l'),
                new Input('incoming_compensets_good', 'Good', 'checkbox-l'),
                new Input('incoming_compensets_ground', 'Ground', 'checkbox-l'),
                new Input('incoming_compensets_short_turn', 'Short Turn', 'checkbox-l'),
                new Input('final_compensets_na', 'N/A', 'checkbox-l'),
                new Input('final_compensets_good', 'Good', 'checkbox-l'),
                new Input('final_compensets_ground', 'Ground', 'checkbox-l'),
                new Input('final_compensets_short_turn', 'Short Turn', 'checkbox-l')
            ],
            [
                new Span('Shunt Field'),
                new Input('incoming_shunt_field_na', 'N/A', 'checkbox-l'),
                new Input('incoming_shunt_field_good', 'Good', 'checkbox-l'),
                new Input('incoming_shunt_field_ground', 'Ground', 'checkbox-l'),
                new Input('incoming_shunt_field_short_turn', 'Short Turn', 'checkbox-l'),
                new Input('final_shunt_field_na', 'N/A', 'checkbox-l'),
                new Input('final_shunt_field_good', 'Good', 'checkbox-l'),
                new Input('final_shunt_field_ground', 'Ground', 'checkbox-l'),
                new Input('final_shunt_field_short_turn', 'Short Turn', 'checkbox-l')
            ], [
                new Span('Series Field'),
                new Input('incoming_series_field_na', 'N/A', 'checkbox-l'),
                new Input('incoming_series_field_good', 'Good', 'checkbox-l'),
                new Input('incoming_series_field_ground', 'Ground', 'checkbox-l'),
                new Input('incoming_series_field_short_turn', 'Short Turn', 'checkbox-l'),
                new Input('final_series_field_na', 'N/A', 'checkbox-l'),
                new Input('final_series_field_good', 'Good', 'checkbox-l'),
                new Input('final_series_field_ground', 'Ground', 'checkbox-l'),
                new Input('final_series_field_short_turn', 'Short Turn', 'checkbox-l')
            ],
        ];
    }
}
