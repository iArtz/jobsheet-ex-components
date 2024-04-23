<?php

namespace Jobsheet\Ex\Classes;

use Jobsheet\Ex\Classes\Input;


class Dropdown extends Input
{
    protected array $list;
    protected string $class;

    public function __construct(string $name, string $title, array $list, array $class = [])
    {
        parent::__construct($name, $title);
        $this->list = $list;
        $this->class = join(' ', $class);
    }

    protected function handlerSelected($item)
    {
        return ($this->data == $item) ? 'selected disabled' : '';
    }

    protected function createList()
    {
        $output = '<option selected disabled>-</option>';
        foreach ($this->list as $item) {
            $output .= "<option value='{$item}' {$this->handlerSelected($item)}>{$item}</option>";
        }
        return $output;
    }

    public function render(): string
    {
        $label = !empty($this->title) ? "<label for='{$this->name}' class='text-xs text-center min-w-fit w-44'>{$this->title}</label>" : null;
        return <<<HTML
                    {$label}
                    <select class="text-xs text-amber-500 font-medium {$this->class}" name="{$this->name}" id="{$this->name}">
                        {$this->createList()}
                    </select>
                HTML;
    }
}
