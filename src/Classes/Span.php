<?php

namespace Jobsheet\Ex\Classes;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Utils\Helper;

class Span extends FormElement
{
    private string $class;

    public function __construct(string $title, array $class = [])
    {
        parent::__construct(Helper::randomString(), $title);
        $this->class = join(' ', $class);
    }

    public function render(): string
    {
        return <<<HTML
                    <span class="text-xs text-center min-w-fit {$this->class}">{$this->title}</span>
                HTML;
    }
}
