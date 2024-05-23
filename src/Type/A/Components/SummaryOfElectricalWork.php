<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class SummaryOfElectricalWork extends Component
{
    protected static array $compatibleWith = [
        MotorType::DC,
        MotorType::LV,
        MotorType::MV,
        MotorType::SinglePhase,
        MotorType::TwoSpeed
    ];

    protected static array $data = [
        'summary_of_electrical_work' => [
            [],
            [
                'stator_winding_overhaul' => true,
                'stator_winding_rewind' => true,
                'stator_winding_note' => '-',
                'stator_winding_accept' => true,
                'stator_winding_accept_note' => '-'
            ],
            [
                'core_loss_stator_test' => true,
                'core_loss_stator_na' => true,
                'core_loss_stator_note' => '-',
                'core_loss_stator_accept' => true,
                'core_loss_stator_accept_note' => '-'
            ],
            [
                'hot_spot_stator_test' => true,
                'hot_spot_stator_na' => true,
                'hot_spot_stator_note' => '-',
                'hot_spot_stator_accept' => true,
                'hot_spot_stator_accept_note' => '-',
            ],
            [
                'hot_spot_rotor_test' => true,
                'hot_spot_rotor_na' => true,
                'hot_spot_rotor_note' => '-',
                'hot_spot_rotor_accept' => true,
                'hot_spot_rotor_accept_note' => '-',
            ],
            [
                'stator_laminate_restack' => true,
                'stator_laminate_repair' => true,
                'stator_laminate_note' => '-',
                'stator_laminate_accept' => true,
                'stator_laminate_accept_note' => '-',
            ],
            [
                'rotor_laminate_restack' => true,
                'rotor_laminate_repair' => true,
                'rotor_laminate_note' => '-',
                'rotor_laminate_accept' => true,
                'rotor_laminate_accept_note' => '-',
            ],
            [
                'slot_wadge_replace' => true,
                'slot_wadge_repair' => true,
                'slot_wadge_note' => '-',
                'slot_wadge_accept' => true,
                'slot_wadge_accept_note' => '-',
            ],
            [
                'mgnt_slot_wadge_replace' => true,
                'mgnt_slot_wadge_repair' => true,
                'mgnt_slot_wadge_note' => '-',
                'mgnt_slot_wadge_accept' => true,
                'mgnt_slot_wadge_accept_note' => '-',
            ],
            [
                'cable_gland_replace' => true,
                'cable_gland_na' => true,
                'cable_gland_note' => '-',
                'cable_gland_accept' => true,
                'cable_gland_accept_note' => '-',
            ],
            [
                'diode_replace' => true,
                'diode_na' => true,
                'diode_note' => '-',
                'diode_accept' => true,
                'diode_note' => '-',
            ],
            [
                'rectifier_unit_replace' => true,
                'rectifier_unit_na' => true,
                'rectifier_unit_note' => '-',
                'rectifier_unit_accept' => true,
                'rectifier_unit_accept_note' => '-',
            ],
            [
                'lead_wire_replace' => true,
                'lead_wire_na' => true,
                'lead_wire_note' => '-',
                'lead_wire_accept' => true,
                'lead_wire_accept_note' => '-',
            ],
            [
                'glass_sleeve_replace' => true,
                'glass_sleeve_na' => true,
                'glass_sleeve_note' => '-',
                'glass_sleeve_accept' => true,
                'glass_sleeve_accept_note' => '-',
            ],
            [
                'heater_replace' => true,
                'heater_na' => true,
                'heater_note' => '-',
                'heater_accept' => true,
                'heater_accept_note' => '-',
            ],
            [
                'temp_sensor_replace' => true,
                'temp_sensor_na' => true,
                'temp_sensor_note' => '-',
                'temp_sensor_accept' => true,
                'temp_sensor_accept_note' => '-',
            ],
            [
                'terminal_board_replace' => true,
                'terminal_board_repair' => true,
                'terminal_board_note' => '-',
                'terminal_board_accept' => true,
                'terminal_board_accept_note' => '-',
            ],
            [
                'terminal_box_replace' => true,
                'terminal_box_repair' => true,
                'terminal_box_note' => '-',
                'terminal_box_accept' => true,
                'terminal_box_accept_note' => '-',
            ],
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'summary_of_electrical_work_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'summary_of_electrical_work',
                'title' => 'Summary of Electrical Work'
            ]
        ];

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        return [
            [
                new Span('As received'),
                new Span('Instruction'),
                new Span('After repair'),
            ],
            [
                new Span('- Stator Winding', ['!text-left']),
                new Input('stator_winding_overhaul', 'Overhaul', 'checkbox-l'),
                new Input('stator_winding_rewind', 'Rewind', 'checkbox-l'),
                new Input('stator_winding_note'),
                new Input('stator_winding_accept', 'Accept', 'checkbox-l'),
                new Input('stator_winding_accept_note'),
            ],
            [
                new Span('- Core Loss Stator', ['!text-left']),
                new Input('core_loss_stator_test', 'Test', 'checkbox-l'),
                new Input('core_loss_stator_na', 'N/A', 'checkbox-l'),
                new Input('core_loss_stator_note'),
                new Input('core_loss_stator_accept', 'Accept', 'checkbox-l'),
                new Input('core_loss_stator_accept_note'),
            ],
            [
                new Span('- Hot Spot Stator', ['!text-left']),
                new Input('hot_spot_stator_test', 'Test', 'checkbox-l'),
                new Input('hot_spot_stator_na', 'N/A', 'checkbox-l'),
                new Input('hot_spot_stator_note'),
                new Input('hot_spot_stator_accept', 'Accept', 'checkbox-l'),
                new Input('hot_spot_stator_accept_note'),
            ],
            [
                new Span('- Hot Spot Rotor', ['!text-left']),
                new Input('hot_spot_rotor_test', 'Test', 'checkbox-l'),
                new Input('hot_spot_rotor_na', 'N/A', 'checkbox-l'),
                new Input('hot_spot_rotor_note'),
                new Input('hot_spot_rotor_accept', 'Accept', 'checkbox-l'),
                new Input('hot_spot_rotor_accept_note'),
            ],
            [
                new Span('- Stator Laminate', ['!text-left']),
                new Input('stator_laminate_restack', 'Restack', 'checkbox-l'),
                new Input('stator_laminate_repair', 'Repair', 'checkbox-l'),
                new Input('stator_laminate_note'),
                new Input('stator_laminate_accept', 'Accept', 'checkbox-l'),
                new Input('stator_laminate_accept_note'),
            ],
            [
                new Span('- Rotor Laminate', ['!text-left']),
                new Input('rotor_laminate_restack', 'Restack', 'checkbox-l'),
                new Input('rotor_laminate_repair', 'Repair', 'checkbox-l'),
                new Input('rotor_laminate_note'),
                new Input('rotor_laminate_accept', 'Accept', 'checkbox-l'),
                new Input('rotor_laminate_accept_note'),
            ],
            [
                new Span('- Slot Wedge', ['!text-left']),
                new Input('slot_wadge_replace', 'Replace', 'checkbox-l'),
                new Input('slot_wadge_repair', 'Repair', 'checkbox-l'),
                new Input('slot_wadge_note'),
                new Input('slot_wadge_accept', 'Accept', 'checkbox-l'),
                new Input('slot_wadge_accept_note'),
            ],
            [
                new Span('- Mgnt. Slot Wedge', ['!text-left']),
                new Input('mgnt_slot_wadge_replace', 'Replace', 'checkbox-l'),
                new Input('mgnt_slot_wadge_repair', 'Repair', 'checkbox-l'),
                new Input('mgnt_slot_wadge_note'),
                new Input('mgnt_slot_wadge_accept', 'Accept', 'checkbox-l'),
                new Input('mgnt_slot_wadge_accept_note'),
            ],
            [
                new Span('- Cable Gland', ['!text-left']),
                new Input('cable_gland_replace', 'Replace', 'checkbox-l'),
                new Input('cable_gland_na', 'N/A', 'checkbox-l'),
                new Input('cable_gland_note'),
                new Input('cable_gland_accept', 'Accept', 'checkbox-l'),
                new Input('cable_gland_accept_note'),
            ],
            [
                new Span('- Diode', ['!text-left']),
                new Input('diode_replace', 'Replace', 'checkbox-l'),
                new Input('diode_na', 'N/A', 'checkbox-l'),
                new Input('diode_note'),
                new Input('diode_accept', 'Accept', 'checkbox-l'),
                new Input('diode_accept_note'),
            ],
            [
                new Span('- Rectifier Unit', ['!text-left']),
                new Input('rectifier_unit_replace', 'Replace', 'checkbox-l'),
                new Input('rectifier_unit_na', 'N/A', 'checkbox-l'),
                new Input('rectifier_unit_note'),
                new Input('rectifier_unit_accept', 'Accept', 'checkbox-l'),
                new Input('rectifier_unit_accept_note'),
            ],
            [
                new Span('- Lead Wire', ['!text-left']),
                new Input('lead_wire_replace', 'Replace', 'checkbox-l'),
                new Input('lead_wire_na', 'N/A', 'checkbox-l'),
                new Input('lead_wire_note'),
                new Input('lead_wire_accept', 'Accept', 'checkbox-l'),
                new Input('lead_wire_accept_note'),
            ],
            [
                new Span('- Glass Sleeve', ['!text-left']),
                new Input('glass_sleeve_replace', 'Replace', 'checkbox-l'),
                new Input('glass_sleeve_na', 'N/A', 'checkbox-l'),
                new Input('glass_sleeve_note'),
                new Input('glass_sleeve_accept', 'Accept', 'checkbox-l'),
                new Input('glass_sleeve_accept_note'),
            ],
            [
                new Span('- Heater', ['!text-left']),
                new Input('heater_replace', 'Replace', 'checkbox-l'),
                new Input('heater_na', 'N/A', 'checkbox-l'),
                new Input('heater_note'),
                new Input('heater_accept', 'Accept', 'checkbox-l'),
                new Input('heater_accept_note'),
            ],
            [
                new Span('- Temp.Sensor', ['!text-left']),
                new Input('temp_sensor_replace', 'Replace', 'checkbox-l'),
                new Input('temp_sensor_na', 'N/A', 'checkbox-l'),
                new Input('temp_sensor_note'),
                new Input('temp_sensor_accept', 'Accept', 'checkbox-l'),
                new Input('temp_sensor_accept_note'),
            ],
            [
                new Span('- Terminal Board', ['!text-left']),
                new Input('terminal_board_replace', 'Replace', 'checkbox-l'),
                new Input('terminal_board_repair', 'Repair', 'checkbox-l'),
                new Input('terminal_board_note'),
                new Input('terminal_board_accept', 'Accept', 'checkbox-l'),
                new Input('terminal_board_accept_note'),
            ],
            [
                new Span('- Terminal Box', ['!text-left']),
                new Input('terminal_box_replace', 'Replace', 'checkbox-l'),
                new Input('terminal_box_repair', 'Repair', 'checkbox-l'),
                new Input('terminal_box_note'),
                new Input('terminal_box_accept', 'Accept', 'checkbox-l'),
                new Input('terminal_box_accept_note'),
            ],
        ];
    }
}
