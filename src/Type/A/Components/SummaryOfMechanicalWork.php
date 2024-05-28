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
