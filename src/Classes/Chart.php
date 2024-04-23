<?php

namespace Jobsheet\Ex\Classes;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Utils\Helper;

class Chart extends FormElement
{
	private $config;

	public function __construct(array $config = [])
	{
		$name = Helper::randomString();
		parent::__construct($name, $name);
		$this->config = $config;
	}

	private function passArray(array $array): string
	{
		return json_encode($array);
	}

	protected function handlerType(): string
	{
		$chart = '';
		switch ($this->config['type']) {
			default:
				$chart = <<<HTML
							<div class="flex justify-between p-4">
								<span class="text-center text-xs [writing-mode:vertical-lr] rotate-180">{$this->config['title']}</span>
								<canvas id="{$this->name}" class="min-w-[500px] min-h-[250px]"></canvas>
							</div>
							<script>
								const ctx{$this->name} = document.getElementById('{$this->name}');
								const myChart{$this->name} = new Chart(ctx{$this->name}, {
									type: '{$this->config['type']}',
									data: {
										labels: [1,2,3,4,5,6,7,8,9,10], // X Axis
										datasets: [{
											label: '# Time (min.)',
											data: {$this->passArray($this->config['data'])}, // Y Axis
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
