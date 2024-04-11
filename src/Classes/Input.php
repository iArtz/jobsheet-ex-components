<?php

namespace Jobsheet\Ex\Classes;

use Jobsheet\Ex\Classes\Abstracts\FormElement;

class Input extends FormElement
{
    private $type;

    public function __construct(string $name, string $title, string $type = 'text')
    {
        parent::__construct($name, $title);
        $this->type = $type;
    }

    protected function handlerType(): string
    {
        $input = '';
        switch ($this->type) {
            case 'text':
            case 'date':
                $input = <<<HTML
                            <label for="{$this->name}">{$this->title}</label> :
                            <input
                                name="{$this->name}"
                                id="{$this->name}"
                                type="{$this->type}"
                                value="{$this->data}"
                            >
                    HTML;
                break;
            case 'checkbox':
                $input = <<<HTML
                            <div class="inline-flex items-center">
                                <label class="mx-4" for="{$this->name}">{$this->title}</label>
                                <input
                                    class="form-checkbox h-5 w-5 text-indigo-600"
                                    name="{$this->name}"
                                    id="{$this->name}"
                                    type="{$this->type}"
                                    value="{$this->data}"
                                    {$this->handlerCheckbox()}
                                >
                            </div>
                    HTML;
                break;
        }
        return $input;
    }

    protected function handlerCheckbox(): string
    {
        return ($this->data == true && $this->type == 'checkbox') ? 'checked' : '';
    }

    public function render(): string
    {
        return <<<HTML
                    {$this->handlerType()}
                HTML;
    }
}
