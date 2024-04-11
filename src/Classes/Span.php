<?php

namespace Jobsheet\Ex\Classes;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Utils\RandomString;

class Span extends FormElement
{
    public function __construct(string $title)
    {
        parent::__construct(RandomString::generate(), $title);
    }

    public function render(): string
    {
        return <<<HTML
                <span class="px-2">{$this->title}</span>
            HTML;
    }
}
