<?php

namespace Jobsheet\Ex\Classes;

use Exception;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Utils\Helper;

class Chart extends FormElement
{
    public function __construct(array $data = [])
    {
        parent::__construct($data['name'], $data['name']);
        $this->data = $data;
    }

    protected function handlerType(): string
    {
        if (empty($this->data['data'])) throw new Exception('Undefined data');
        if (empty($this->data['type'])) throw new Exception('Please specific chart type.');
        $chart = '';
        $data = Helper::toJSON($this->data['data']);
        switch ($this->data['type']) {
            default:
                $chart = <<<HTML
                            <div class="flex justify-between p-4">
                                <span class="text-center text-xs [writing-mode:vertical-lr] rotate-180">{$this->data['title']}</span>
                                <canvas id="{$this->name}" class="min-w-[500px] min-h-[250px]"></canvas>
                            </div>
                            <script>
                                const ctx{$this->name} = document.getElementById('{$this->name}');
                                const myChart{$this->name} = new Chart(ctx{$this->name}, {
                                    type: '{$this->data['type']}',
                                    data: {
                                        labels: [1,2,3,4,5,6,7,8,9,10], // X Axis
                                        datasets: [{
                                            label: '# Time (min.)',
                                            data: {$data}, // Y Axis
                                            backgroundColor: [
                                                'rgba(0, 0, 255, 0.2)',
                                            ],
                                            borderColor: [
                                                'rgba(0, 0, 255, 1)',
                                            ],
                                            borderWidth: 1,
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        plugins: {
                                            legend: {
                                                position: 'bottom',
                                            },
                                        }
                                    },
                                });
                            </script>
                        HTML;
                break;
        }
        return $chart;
    }

    public function render(): string
    {
        return <<<HTML
                    {$this->handlerType()}
                HTML;
    }
}