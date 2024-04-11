<?php

namespace Jobsheet\Ex\Classes;

use Jobsheet\Ex\Classes\Input;


class Dropdown extends Input
{
    protected array $list;

    public function __construct(string $name, string $title, array $list)
    {
        parent::__construct($name, $title);
        $this->list = $list;
    }

    protected function createList()
    {
        $output = '';
        foreach ($this->list as $item) {
            $output .= "<option value='{$item}'>{$item}</option>";
        }
        return $output;
    }

    public function render(): string
    {
        return <<<HTML
                    <label for="{$this->name}">{$this->title}</label>
                    <select name="{$this->name}" id="{$this->name}">
                        {$this->createList()}
                    </select>
                HTML;
    }
}
