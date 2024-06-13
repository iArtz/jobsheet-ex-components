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
        if (empty($this->data['type'])) throw new Exception('Please specific chart type.');
        if (empty($this->data['datasets'])) throw new Exception('Undefined datasets');
        if (empty($this->data['title'])) throw new Exception('Undefined title');
        $chart = '';
        $datasets = [];
        foreach ($this->data['datasets'] as $data) {
            $datasets[] = [
                'label' => $data['label'],
                'data' => $data['data'],
                'backgroundColor' => [
                    "rgba({$data['color']}, 0.2)",
                ],
                'borderColor' => [
                    "rgba({$data['color']}, 1",
                ],
                'borderWidth' => 1,
            ];
        }
        $datasets = json_encode($datasets);
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
                                        datasets: {$datasets}
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
