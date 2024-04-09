<?php

namespace Jobsheet\Ex\Classes;

use Jobsheet\Ex\Classes\Abstracts\FieldComposite;

class Form extends FieldComposite
{
    protected $url;

    public function __construct(string $name, string $title, string $url)
    {
        parent::__construct($name, $title);
        $this->url = $url;
    }

    public function render(): string
    {
        $output = parent::render();
        return <<<HTML
                <form action="{$this->url}" name="{$this->name}" id="{$this->name}">
                    <h3>{$this->title}</h3>
                    $output
                </form>
                HTML;
    }
}