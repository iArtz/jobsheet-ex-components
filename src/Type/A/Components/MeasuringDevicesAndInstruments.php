<?php

namespace Jobsheet\Ex\Type\A\Components;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Span;
use Jobsheet\Ex\Utils\Helper;

class MeasuringDevicesAndInstruments extends Component
{
    protected static array $compatibleWith = [
        MotorType::DC,
        MotorType::LV,
        MotorType::MV,
        MotorType::SinglePhase,
        MotorType::TwoSpeed
    ];

    private static function generateMockData()
    {
        for ($i = 1; $i <= 17; $i++) {
            static::$data['measuring_devices_and_instruments'][] = [
                "incoming_serial_no_$i" => '-',
                "incoming_id_no_$i" => '-',
                "final_serial_no_$i" => '-',
                "final_id_no_$i" => '-',
            ];
        }

        static::$data['measuring_devices_and_instruments'] = array_merge(static::$data['measuring_devices_and_instruments'], [
            [
                'summary' => '-',
            ],
            [],
            [
                'new_tE' => 'New tE =',
                'IA_IN' => 'IA/IN ='
            ],
            [],
            [],
            [],
            [
                'check_1' => true,
                'check_2' => true,
            ]
        ]);
    }

    protected static array $data = [
        'measuring_devices_and_instruments' => [
            [],
            [],
        ]
    ];

    public static function build(): FormElement
    {
        $config = [
            'form' => [
                'name' => 'measuring_devices_and_instruments_form',
                'title' => '',
                'action' => getenv('API_ENDPOINTS_EX_COMPONENTS')
            ],
            'fieldset' => [
                'name' => 'measuring_devices_and_instruments',
                'title' => 'Measuring Devices And Instruments'
            ]
        ];

        static::generateMockData();

        return static::createForm(Helper::arrayToObject($config));
    }

    protected static function createElements(): array
    {
        $firstHalf = [
            [
                new Span('INCOMING'),
                new Span('FINAL')
            ],
            [
                new Span('Item'),
                new Span('Equipment name'),
                new Span('Serial No.'),
                new Span('ID No.'),
                new Span('Item'),
                new Span('Equipment name'),
                new Span('Serial No.'),
                new Span('ID No.')
            ]
        ];

        $equipmentName = [
            'External Micrometer',
            'Bore Gauge',
            'Vernier Caliper',
            'Ohm Meter',
            'Micro Ohmmeter',
            'L.R.C Meter',
            'Megohm Meter',
            'Clamp Meter',
            'Tacho Meter',
            'Infrared Thermometer',
            'Vibration Meter Kit',
            'Coating Thickness Gauge',
        ];

        for ($i = 1; $i <= 17; $i++) {

            if ($i <= 3) {
                $label = $equipmentName[0];
            }
            if ($i >= 4 && $i <= 6) {
                $label = $equipmentName[1];
            }
            if ($i >= 7 && $i <= 8) {
                $label = $equipmentName[2];
            }
            if ($i >= 9 && $i <= 17) {
                $label = $equipmentName[$i - 6];
            }

            $firstHalf[] = [
                new Span($i),
                new Span($label),
                new Input("incoming_serial_no_$i"),
                new Input("incoming_id_no_$i"),
                new Span($i),
                new Span($label),
                new Input("final_serial_no_$i"),
                new Input("final_id_no_$i"),
            ];
        }

        $secondHalf = [
            [
                new Input('summary', 'SUMMARY'),
            ],
            [
                new Span('Note For EX e rewinds follow the repair standards requirements and record proof of complinace'),
            ],
            [
                new Input('new_tE', 'New tE ='),
                new Span('Sec.'),
                new Input('IA_IN', 'IA/IN =')
            ],
            [
                new Span('Identification mark affixed to motor  :'),
            ],
            [
                new Span('R'),
                new Span('(Repair to standard AND certificate)'),
                new Span('', ['triangle']),
                new Span('(Repair to standard, but not in compliance with certificate)')
            ],
            [
                new Span('IEC'),
                new Span('IEC')
            ],
            [
                new Input('check_1', '(Please Mark)', 'checkbox-l'),
                new Input('check_2', '(Please Mark)', 'checkbox-l'),
            ]
        ];
        return array_merge($firstHalf, $secondHalf);
    }
}
