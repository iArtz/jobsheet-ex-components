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
                            <label class="text-xs mt-2 mr-1" for="{$this->name}">{$this->title}:</label>
                            <input
                                class="text-blue-900 text-center text-sm h-7"
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
                                <label class="mx-4 text-xs" for="{$this->name}">{$this->title}</label>
                                <input
                                    class="form-checkbox h-4 w-4 text-sm accent-orange-400 bg-gray-100 border-gray-300 rounded focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
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
