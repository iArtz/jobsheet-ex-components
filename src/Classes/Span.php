<?php

namespace Jobsheet\Ex\Classes;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Utils\RandomString;

class Span extends FormElement
{
    private string $class;

    public function __construct(string $title, array $class = [])
    {
        parent::__construct(RandomString::generate(), $title);
        $this->class = join(' ', $class);
    }

    public function render(): string
    {
        return <<<HTML
                <span class="px-1 text-xs mr-1 {$this->class}">{$this->title}</span>
            HTML;
    }
}
