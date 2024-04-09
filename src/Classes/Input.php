<?php

namespace Jobsheet\Ex\Classes;

use Jobsheet\Ex\Classes\Abstracts\FormElement;

class Input extends FormElement
{
    private $type;

    public function __construct(string $name, string $title, string $type)
    {
        parent::__construct($name, $title);
        $this->type = $type;
    }

    protected function handlerCheckbox(): string
    {
        return ($this->data == true && $this->type == 'checkbox') ? 'checked' : '';
    }

    public function render(): string
    {
        return <<<HTML
                    <label for="{$this->name}">{$this->title}</label> : 
                    <input name="{$this->name}" id="{$this->name}" type="{$this->type}" value="{$this->data}" {$this->handlerCheckbox()}>
                HTML;
    }
}