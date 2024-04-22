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

	protected function handlerType(): string
	{
		$chart = '';
		switch ($this->config['type']) {
			case 'line':
				$chart = <<<HTML
							<div class="flex flex-col justify-between p-4">
								<canvas id="{$this->name}" class="min-w-[400px] min-h-[400px]"></canvas>
								<span class="text-center text-xs">{$this->config['title']}</span>
							</div>
							<script>
								// const ctx = document.getElementById('{$this->name}')
											const ctx{$this->name} = document.getElementById('{$this->name}');
											const myChart = new Chart(ctx{$this->name}, {
												type: '{$this->config['type']}',
												data: {
													labels: [1,2,3,4,5,6,7,8,9,10],
													datasets: [{
														label: '# Time (min.)',
														data: [1,2,3,4,5,6,7,8,9,10],
														backgroundColor: [
															'rgba(255, 99, 132, 0.2)',
															'rgba(54, 162, 235, 0.2)',
															'rgba(255, 206, 86, 0.2)',
															'rgba(75, 192, 192, 0.2)',
															'rgba(153, 102, 255, 0.2)',
															'rgba(255, 159, 64, 0.2)'
														],
														borderColor: [
															'rgba(255, 99, 132, 1)',
															'rgba(54, 162, 235, 1)',
															'rgba(255, 206, 86, 1)',
															'rgba(75, 192, 192, 1)',
															'rgba(153, 102, 255, 1)',
															'rgba(255, 159, 64, 1)'
														],
														borderWidth: 1
													}]
												},
												options: {
													scales: {
														yAxes: [{
															ticks: {
																beginAtZero: true
															}
														}]
													}
												}
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
