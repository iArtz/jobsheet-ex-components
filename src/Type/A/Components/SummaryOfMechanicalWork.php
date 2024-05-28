<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class SummaryOfMechanicalWork extends SummaryOfElectricalWork
{
    protected static array $data = [
        'summary_of_mechanical_work' => [
            [],
            [],
            [
                'stator_frame_pass' => true,
                'stator_frame_fail' => true,
                'stator_frame_note' => '-',
                'stator_frame_accept' => true,
                'stator_frame_accept_note' => '-',
            ],
            [
                'endshield_de_pass' => true,
                'endshield_de_fail' => true,
                'endshield_de_note' => '-',
                'endshield_de_accept' => true,
                'endshield_de_accept_note' => '-',
            ],
            [
                'endshield_nde_pass' => true,
                'endshield_nde_fail' => true,
                'endshield_nde_note' => '-',
                'endshield_nde_accept' => true,
                'endshield_nde_accept_note' => '-',
            ],
            [
                'bearing_cap_de_pass' => true,
                'bearing_cap_de_fail' => true,
                'bearing_cap_de_note' => '-',
                'bearing_cap_de_accept' => true,
                'bearing_cap_de_accept_note' => '-',
            ],
            [
                'bearing_cap_nde_pass' => true,
                'bearing_cap_nde_fail' => true,
                'bearing_cap_nde_note' => '-',
                'bearing_cap_nde_accept' => true,
                'bearing_cap_nde_accept_note' => '-',
            ],
            [
                'bearing_de_value' => '-',
                'bearing_de_replace' => true,
                'bearing_de_note' => '-',
                'bearing_de_accept' => true,
                'bearing_de_accept_note' => '-',
            ],
            [
                'bearing_nde_value' => '-',
                'bearing_nde_replace' => true,
                'bearing_nde_note' => '-',
                'bearing_nde_accept' => true,
                'bearing_nde_accept_note' => '-',
            ],
            [
                'bearing_housing_de_pass' => true,
                'bearing_housing_de_replace' => true,
                'bearing_housing_de_note' => '-',
                'bearing_housing_de_accept' => true,
                'bearing_housing_de_accept_note' => '-',
            ],
            [
                'bearing_housing_nde_pass' => true,
                'bearing_housing_nde_replace' => true,
                'bearing_housing_nde_note' => '-',
                'bearing_housing_nde_accept' => true,
                'bearing_housing_nde_accept_note' => '-',
            ],
            [
                'fan_clearance_cover_pass' => true,
                'fan_clearance_cover_fail' => true,
                'fan_clearance_cover_note' => '-',
                'fan_clearance_cover_accept' => true,
                'fan_clearance_cover_accept_note' => '-',
            ],
            [],
            [
                'fan_cover_pass' => true,
                'fan_cover_fail' => true,
                'fan_cover_note' => '-',
                'fan_cover_accept' => true,
                'fan_cover_accept_note' => '-',
            ],
            [],
            [
                'terminal_box_lid_pass' => true,
                'terminal_box_lid_fail' => true,
                'terminal_box_lid_note' => '-',
                'terminal_box_lid_accept' => true,
                'terminal_box_lid_accept_note' => '-',
            ],
            [
                'terminal_gaskets_pass' => true,
                'terminal_gaskets_fail' => true,
                'terminal_gaskets_note' => '-',
                'terminal_gaskets_accept' => true,
                'terminal_gaskets_accept_note' => '-',
            ],
            [
                'terminal_fixed_pass' => true,
                'terminal_fixed_fail' => true,
                'terminal_fixed_note' => '-',
                'terminal_fixed_accept' => true,
                'terminal_fixed_accept_note' => '-',
            ],
            [],
            [],
            [
                'studs_nut_pass' => true,
                'studs_nut_fail' => true,
                'studs_nut_note' => '-',
                'studs_nut_accept' => true,
                'studs_nut_accept_note' => '-',
            ],
            [
                'no_sharp_edges_on_terminal_pass' => true,
                'no_sharp_edges_on_terminal_fail' => true,
                'no_sharp_edges_on_terminal_note' => '-',
                'no_sharp_edges_on_terminal_accept' => true,
                'no_sharp_edges_on_terminal_accept_note' => '-',
            ],
            [
                'conductors_pass' => true,
                'conductors_fail' => true,
                'conductors_note' => '-',
                'conductors_accept' => true,
                'conductors_accept_note' => '-',
            ],
            [
                'clearances_bar_pass' => true,
                'clearances_bar_fail' => true,
                'clearances_bar_note' => '-',
                'clearances_bar_accept' => true,
                'clearances_bar_accept_note' => '-',
            ],
            [],
            [
                'barriers_std_pass' => true,
                'barriers_std_fail' => true,
                'barriers_std_note' => '-',
                'barriers_std_accept' => true,
                'barriers_std_accept_note' => '-',
            ],
            [
                'correct_fixing_pass' => true,
                'correct_fixing_fail' => true,
                'correct_fixing_note' => '-',
                'correct_fixing_accept' => true,
                'correct_fixing_accept_note' => '-',
            ],
            [],
            [
                'cable_entry_pass' => true,
                'cable_entry_fail' => true,
                'cable_entry_note' => '-',
                'cable_entry_accept' => true,
                'cable_entry_accept_note' => '-',
            ],
            [
                'gland_pass' => true,
                'gland_fail' => true,
                'gland_note' => '-',
                'gland_accept' => true,
                'gland_accept_note' => '-',
            ],
            [
                'stator_core_pass' => true,
                'stator_core_fail' => true,
                'stator_core_note' => '-',
                'stator_core_accept' => true,
                'stator_core_accept_note' => '-',
            ],
            [
                'rotor_core_pass' => true,
                'rotor_core_fail' => true,
                'rotor_core_note' => '-',
                'rotor_core_accept' => true,
                'rotor_core_accept_note' => '-',
            ], [
                'mountings_pass' => true,
                'mountings_fail' => true,
                'mountings_note' => '-',
                'mountings_accept' => true,
                'mountings_accept_note' => '-',
            ],
            [
                'feet_pass' => true,
                'feet_fail' => true,
                'feet_note' => '-',
                'feet_accept' => true,
                'feet_accept_note' => '-',
            ],
            [
                'flange_pass' => true,
                'flange_fail' => true,
                'flange_note' => '-',
                'flange_accept' => true,
                'flange_accept_note' => '-',
            ],
            [
                'fixing_bolts_pass' => true,
                'fixing_bolts_fail' => true,
                'fixing_bolts_note' => '-',
                'fixing_bolts_accept' => true,
                'fixing_bolts_accept_note' => '-',
            ],
            [
                'lifting_pass' => true,
                'lifting_fail' => true,
                'lifting_note' => '-',
                'lifting_accept' => true,
                'lifting_accept_note' => '-',
            ], [
                'enclosure_protect_pass' => true,
                'enclosure_protect_fail' => true,
                'enclosure_protect_note' => '-',
                'enclosure_protect_accept' => true,
                'enclosure_protect_accept_note' => '-',
            ],
            [],
            [
                'ancillaries_pass' => true,
                'ancillaries_fail' => true,
                'ancillaries_note' => '-',
                'ancillaries_accept' => true,
                'ancillaries_accept_note' => '-',
            ], [
                'rotor_balance_pass' => true,
                'rotor_balance_fail' => true,
                'rotor_balance_note' => '-',
                'rotor_balance_accept' => true,
                'rotor_balance_accept_note' => '-',
            ],
            [
                'surface_finish_pass' => true,
                'surface_finish_fail' => true,
                'surface_finish_note' => '-',
                'surface_finish_accept' => true,
                'surface_finish_thickness' => '-'
            ],
            [
                'other' => '-',
            ]
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'summary_of_mechanical_work_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'summary_of_mechanical_work',
                'title' => 'Summary of Mechanical Work'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('Inspection Checklist Group II (non mining):  Ex e , nA , N , eb , ec', ['!pl-4']),
            ],
            [
                new Span('Component', ['!text-left']),
                new Span('Condition / Fault'),
                new Span('Instructions'),
                new Span('After repair')
            ],
            [
                new Span('- Stator frame', ['!text-left']),
                new Input('stator_frame_pass', 'Pass', 'checkbox-l'),
                new Input('stator_frame_fail', 'Fail', 'checkbox-l'),
                new Input('stator_frame_note'),
                new Input('stator_frame_accept', 'Accept', 'checkbox-l'),
                new Input('stator_frame_accept_note'),
            ],
            [
                new Span('- Endshield DE', ['!text-left']),
                new Input('endshield_de_pass', 'Pass', 'checkbox-l'),
                new Input('endshield_de_fail', 'Fail', 'checkbox-l'),
                new Input('endshield_de_note'),
                new Input('endshield_de_accept', 'Accept', 'checkbox-l'),
                new Input('endshield_de_accept_note'),
            ],
            [
                new Span('- Endshield NDE', ['!text-left']),
                new Input('endshield_nde_pass', 'Pass', 'checkbox-l'),
                new Input('endshield_nde_fail', 'Fail', 'checkbox-l'),
                new Input('endshield_nde_note'),
                new Input('endshield_nde_accept', 'Accept', 'checkbox-l'),
                new Input('endshield_nde_accept_note'),
            ],
            [
                new Span('- Bearing cap DE', ['!text-left']),
                new Input('bearing_cap_de_pass', 'Pass', 'checkbox-l'),
                new Input('bearing_cap_de_fail', 'Fail', 'checkbox-l'),
                new Input('bearing_cap_de_note'),
                new Input('bearing_cap_de_accept', 'Accept', 'checkbox-l'),
                new Input('bearing_cap_de_accept_note'),
            ],
            [
                new Span('- Bearing cap NDE', ['!text-left']),
                new Input('bearing_cap_nde_pass', 'Pass', 'checkbox-l'),
                new Input('bearing_cap_nde_fail', 'Fail', 'checkbox-l'),
                new Input('bearing_cap_nde_note'),
                new Input('bearing_cap_nde_accept', 'Accept', 'checkbox-l'),
                new Input('bearing_cap_nde_accept_note'),
            ],
            [
                new Span('- Bearing DE', ['!text-left']),
                new Input('bearing_de_value'),
                new Input('bearing_de_replace', 'Replace', 'checkbox-l'),
                new Input('bearing_de_note', 'Brg.no.'),
                new Input('bearing_de_accept', 'Accept', 'checkbox-l'),
                new Input('bearing_de_accept_note'),
            ],
            [
                new Span('- Bearing NDE', ['!text-left']),
                new Input('bearing_nde_value'),
                new Input('bearing_nde_replace', 'Replace', 'checkbox-l'),
                new Input('bearing_nde_note', 'Brg.no.'),
                new Input('bearing_nde_accept', 'Accept', 'checkbox-l'),
                new Input('bearing_nde_accept_note'),
            ],
            [
                new Span('- Bearing Housing (DE)', ['!text-left']),
                new Input('bearing_housing_de_pass', 'Pass', 'checkbox-l'),
                new Input('bearing_housing_de_replace', 'Repair', 'checkbox-l'),
                new Input('bearing_housing_de_note'),
                new Input('bearing_housing_de_accept', 'Accept', 'checkbox-l'),
                new Input('bearing_housing_de_accept_note'),
            ],
            [
                new Span('- Bearing Housing (NDE)', ['!text-left']),
                new Input('bearing_housing_nde_pass', 'Pass', 'checkbox-l'),
                new Input('bearing_housing_nde_replace', 'Repair', 'checkbox-l'),
                new Input('bearing_housing_nde_note'),
                new Input('bearing_housing_nde_accept', 'Accept', 'checkbox-l'),
                new Input('bearing_housing_nde_accept_note'),
            ],
            [
                new Span('- Fan & clearance to cover,', ['!text-left']),
                new Input('fan_clearance_cover_pass', 'Pass', 'checkbox-l'),
                new Input('fan_clearance_cover_fail', 'Fail', 'checkbox-l'),
                new Input('fan_clearance_cover_note'),
                new Input('fan_clearance_cover_accept', 'Accept', 'checkbox-l'),
                new Input('fan_clearance_cover_accept_note'),
            ],
            [
                new Span('- studs etc. Verify to standard', ['!text-left']),
            ],
            [
                new Span('- Fan cover', ['!text-left']),
                new Input('fan_cover_pass', 'Pass', 'checkbox-l'),
                new Input('fan_cover_fail', 'Fail', 'checkbox-l'),
                new Input('fan_cover_note'),
                new Input('fan_cover_accept', 'Accept', 'checkbox-l'),
                new Input('fan_cover_accept_note'),
            ],
            [
                new Span('- Terminal box', ['!text-left']),
            ],
            [
                new Span('Terminal box lib'),
                new Input('terminal_box_lid_pass', 'Pass', 'checkbox-l'),
                new Input('terminal_box_lid_fail', 'Fail', 'checkbox-l'),
                new Input('terminal_box_lid_note'),
                new Input('terminal_box_lid_accept', 'Accept', 'checkbox-l'),
                new Input('terminal_box_lid_accept_note')
            ],
            [
                new Span('Terminal gaskets'),
                new Input('terminal_gaskets_pass', 'Pass', 'checkbox-l'),
                new Input('terminal_gaskets_fail', 'Fail', 'checkbox-l'),
                new Input('terminal_gaskets_note'),
                new Input('terminal_gaskets_accept', 'Accept', 'checkbox-l'),
                new Input('terminal_gaskets_accept_note')
            ],
            [
                new Span('Terminals fixed (cannot', ['text-blue-700']),
                new Input('terminal_fixed_pass', 'Pass', 'checkbox-l'),
                new Input('terminal_fixed_fail', 'Fail', 'checkbox-l'),
                new Input('terminal_fixed_note'),
                new Input('terminal_fixed_accept', 'Accept', 'checkbox-l'),
                new Input('terminal_fixed_accept_note')
            ],
            [
                new Span('self loosen)+nut at', ['text-blue-700']),
            ],
            [
                new Span('base of stud', ['text-blue-700']),
            ],
            [
                new Span('Studs & nuts same material'),
                new Input('studs_nut_pass', 'Pass', 'checkbox-l'),
                new Input('studs_nut_fail', 'Fail', 'checkbox-l'),
                new Input('studs_nut_note'),
                new Input('studs_nut_accept', 'Accept', 'checkbox-l'),
                new Input('studs_nut_accept_note')
            ],
            [
                new Span('No sharp edges on terminals'),
                new Input('no_sharp_edges_on_terminal_pass', 'Pass', 'checkbox-l'),
                new Input('no_sharp_edges_on_terminal_fail', 'Fail', 'checkbox-l'),
                new Input('no_sharp_edges_on_terminal_note'),
                new Input('no_sharp_edges_on_terminal_accept', 'Accept', 'checkbox-l'),
                new Input('no_sharp_edges_on_terminal_accept_note')
            ],
            [
                new Span('Conductors tight in location'),
                new Input('conductors_pass', 'Pass', 'checkbox-l'),
                new Input('conductors_fail', 'Fail', 'checkbox-l'),
                new Input('conductors_note'),
                new Input('conductors_accept', 'Accept', 'checkbox-l'),
                new Input('conductors_accept_note')
            ],
            [
                new Span('Clearances between bare '),
                new Input('clearances_bar_pass', 'Pass', 'checkbox-l'),
                new Input('clearances_bar_fail', 'Fail', 'checkbox-l'),
                new Input('clearances_bar_note'),
                new Input('clearances_bar_accept', 'Accept', 'checkbox-l'),
                new Input('clearances_bar_accept_note')
            ],
            [
                new Span('conductors to stud')
            ],
            [
                new Span('Barriers to spec/standard'),
                new Input('barriers_std_pass', 'Pass', 'checkbox-l'),
                new Input('barriers_std_fail', 'Fail', 'checkbox-l'),
                new Input('barriers_std_note'),
                new Input('barriers_std_accept', 'Accept', 'checkbox-l'),
                new Input('barriers_std_accept_note')
            ],
            [
                new Span('Correct fixings to', ['text-blue-700']),
                new Input('correct_fixing_pass', 'Pass', 'checkbox-l'),
                new Input('correct_fixing_fail', 'Fail', 'checkbox-l'),
                new Input('correct_fixing_note'),
                new Input('correct_fixing_accept', 'Accept', 'checkbox-l'),
                new Input('correct_fixing_accept_note')
            ],
            [
                new Span('customer cables', ['text-blue-700'])
            ],
            [
                new Span('Cable entry'),
                new Input('cable_entry_pass', 'Pass', 'checkbox-l'),
                new Input('cable_entry_fail', 'Fail', 'checkbox-l'),
                new Input('cable_entry_note'),
                new Input('cable_entry_accept', 'Accept', 'checkbox-l'),
                new Input('cable_entry_accept_note')
            ],
            [
                new Span('Gland(s)'),
                new Input('gland_pass', 'Pass', 'checkbox-l'),
                new Input('gland_fail', 'Fail', 'checkbox-l'),
                new Input('gland_note'),
                new Input('gland_accept', 'Accept', 'checkbox-l'),
                new Input('gland_accept_note')
            ],
            [
                new Span('- Stator core'),
                new Input('stator_core_pass', 'Pass', 'checkbox-l'),
                new Input('stator_core_fail', 'Fail', 'checkbox-l'),
                new Input('stator_core_note'),
                new Input('stator_core_accept', 'Accept', 'checkbox-l'),
                new Input('stator_core_accept_note')
            ],
            [
                new Span('- Rotor core'),
                new Input('rotor_core_pass', 'Pass', 'checkbox-l'),
                new Input('rotor_core_fail', 'Fail', 'checkbox-l'),
                new Input('rotor_core_note'),
                new Input('rotor_core_accept', 'Accept', 'checkbox-l'),
                new Input('rotor_core_accept_note')
            ], [
                new Span('- Mountings'),
                new Input('mountings_pass', 'Pass', 'checkbox-l'),
                new Input('mountings_fail', 'Fail', 'checkbox-l'),
                new Input('mountings_note'),
                new Input('mountings_accept', 'Accept', 'checkbox-l'),
                new Input('mountings_accept_note')
            ],
            [
                new Span('Feet'),
                new Input('feet_pass', 'Pass', 'checkbox-l'),
                new Input('feet_fail', 'Fail', 'checkbox-l'),
                new Input('feet_note'),
                new Input('feet_accept', 'Accept', 'checkbox-l'),
                new Input('feet_accept_note')
            ],
            [
                new Span('Flange'),
                new Input('flange_pass', 'Pass', 'checkbox-l'),
                new Input('flange_fail', 'Fail', 'checkbox-l'),
                new Input('flange_note'),
                new Input('flange_accept', 'Accept', 'checkbox-l'),
                new Input('flange_accept_note')
            ],
            [
                new Span('- Fixing bolts & threads'),
                new Input('fixing_bolts_pass', 'Pass', 'checkbox-l'),
                new Input('fixing_bolts_fail', 'Fail', 'checkbox-l'),
                new Input('fixing_bolts_note'),
                new Input('fixing_bolts_accept', 'Accept', 'checkbox-l'),
                new Input('fixing_bolts_accept_note')
            ],
            [
                new Span('- Lifting facilities & threads'),
                new Input('lifting_pass', 'Pass', 'checkbox-l'),
                new Input('lifting_fail', 'Fail', 'checkbox-l'),
                new Input('lifting_note'),
                new Input('lifting_accept', 'Accept', 'checkbox-l'),
                new Input('lifting_accept_note')
            ], [
                new Span('- Enclosure protection', ['text-blue-700']),
                new Input('enclosure_protect_pass', 'Pass', 'checkbox-l'),
                new Input('enclosure_protect_fail', 'Fail', 'checkbox-l'),
                new Input('enclosure_protect_note'),
                new Input('enclosure_protect_accept', 'Accept', 'checkbox-l'),
                new Input('enclosure_protect_accept_note')
            ],
            [
                new Span('Sealing arrangements', ['text-blue-700', 'pl-2'])
            ],
            [
                new Span('- Ancillaries'),
                new Input('ancillaries_pass', 'Pass', 'checkbox-l'),
                new Input('ancillaries_fail', 'Fail', 'checkbox-l'),
                new Input('ancillaries_note'),
                new Input('ancillaries_accept', 'Accept', 'checkbox-l'),
                new Input('ancillaries_accept_note')
            ], [
                new Span('- Rotor Balance'),
                new Input('rotor_balance_pass', 'Pass', 'checkbox-l'),
                new Input('rotor_balance_fail', 'Fail', 'checkbox-l'),
                new Input('rotor_balance_note'),
                new Input('rotor_balance_accept', 'Accept', 'checkbox-l'),
                new Input('rotor_balance_accept_note')
            ],
            [
                new Span('- Surface finish & painting'),
                new Input('surface_finish_pass', 'Pass', 'checkbox-l'),
                new Input('surface_finish_fail', 'Fail', 'checkbox-l'),
                new Input('surface_finish_note'),
                new Input('surface_finish_accept', 'Accept', 'checkbox-l'),
                new Input('surface_finish_thickness', 'Thickness')
            ],
            [
                new Input('other', 'Other'),
            ]
        ];
    }
}
