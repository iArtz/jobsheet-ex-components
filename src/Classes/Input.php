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
            case 'tel':
                $title = !empty($this->title) ? "{$this->title}:" : null;
                $label = !empty($this->title) ? "<label class='text-xs min-w-fit mx-1' for='{$this->name}'>{$title}</label>" : null;
                $tel = ($this->type == 'tel') ? "autocomplete='tel" : null;
                $input = <<<HTML
                            {$label}
                            <input
                                class="text-blue-900 text-center text-sm h-5"
                                name="{$this->name}"
                                id="{$this->name}"
                                type="{$this->type}"
                                value="{$this->data}"
                                {$tel}
                            >
                        HTML;
                break;
            case 'checkbox':
                $input = <<<HTML
                            <div class="inline-flex items-center">
                                <label class="mx-4 text-xs" for="{$this->name}">{$this->title}</label>
                                <input
                                    class="form-checkbox h-5 w-5 text-sm accent-orange-400 bg-gray-100 border-gray-300 rounded focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    name="{$this->name}"
                                    id="{$this->name}"
                                    type="{$this->type}"
                                    value="{$this->data}"
                                    {$this->handlerCheckbox()}
                                >
                            </div>
                        HTML;
                break;
            case 'checkbox-l':
                $this->type = explode('-', $this->type)[0];
                $input = <<<HTML
                            <div class="inline-flex items-center ml-2">
                                <input
                                    class="form-checkbox h-5 w-5 text-sm accent-orange-400 bg-gray-100 border-gray-300 rounded focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    name="{$this->name}"
                                    id="{$this->name}"
                                    type="{$this->type}"
                                    value="{$this->data}"
                                    {$this->handlerCheckbox()}
                                >
                                <label class="mx-3 text-xs" for="{$this->name}">{$this->title}</label>
                            </div>
                        HTML;
                break;
            case 'image':
                $imageUrl = htmlspecialchars($this->data ?? 'https://placehold.co/300x200');
                $input = <<<HTML
                            <div class="flex flex-col justify-between p-4">
                                    <img src="{$imageUrl}">
                                    <span class="text-center text-xs">{$this->title}</span>
                            </div>
                        HTML;
                break;
            case 'checkbox-text':
                $this->type = explode('-', $this->type)[0];
                [$checkboxVal, $inputVal] = $this->data;
                $input = <<<HTML
                            <div class="inline-flex items-center ml-2">
                                <input
                                    class="form-checkbox h-5 w-5 text-sm accent-orange-400 bg-gray-100 border-gray-300 rounded focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    name="{$this->name}"
                                    id="{$this->name}"
                                    type="{$this->type}"
                                    value="{$checkboxVal}"
                                    {$this->handlerCheckbox()}
                                >
                                <input class="text-xs w-2/4 ml-2" name="{$this->name}_value" id="{$this->name}_value" value="{$inputVal}">
                            </div>
                        HTML;
                break;
            case 'checkbox-image':
                $this->type = explode('-', $this->type)[0];
                [$checkboxVal, $imageUrl] = $this->data;
                $imageUrl = $imageUrl ?? 'https://placehold.co/20x20';
                $input = <<<HTML
                            <div class="inline-flex items-center ml-2">
                                <input
                                    class="form-checkbox h-5 w-5 text-sm accent-orange-400 bg-gray-100 border-gray-300 rounded focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    name="{$this->name}"
                                    id="{$this->name}"
                                    type="{$this->type}"
                                    value="{$checkboxVal}"
                                    {$this->handlerCheckbox()}
                                >
                                    <label class="mx-3 text-xs" for="{$this->name}">{$this->title}</label>
                                    <img class="h-5 w-5" src="{$imageUrl}" onerror="">
                            </div>
                        HTML;
                break;
            case 'submit':
                $input = <<<HTML
                        <div class="flex justify-center">
                            <button
                                class="bg-amber-500 text-xs hover:bg-amber-700 text-white font-bold py-2 px-4 mt-2 rounded"
                                type="{$this->type}"
                                name="{$this->name}"
                                value="{$this->data}"
                            >
                            {$this->title}
                            </button>
                        </div>
                    HTML;
                break;
        }
        return $input;
    }

    protected function handlerCheckbox(): string
    {
        if (is_array($this->data)) {
            return ($this->data[0] == true && $this->type == 'checkbox') ? 'checked' : '';
        }
        return ($this->data == true && $this->type == 'checkbox') ? 'checked' : '';
    }

    public function render(): string
    {
        return <<<HTML
                    {$this->handlerType()}
                HTML;
    }
}
