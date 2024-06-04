<?php

namespace Jobsheet\Ex\Classes;

use Jobsheet\Ex\Classes\Abstracts\FieldComposite;
use Jobsheet\Ex\Classes\Fieldset;

class Form extends FieldComposite
{
    protected string $url;
    protected string $method;

    public function __construct(string $name, string $title, string $url, string $method = 'POST')
    {
        parent::__construct($name, $title);
        $this->url = static::hasId() ? join('', [$url, $_GET['id']]) : $url;
        $this->method = $method;
    }

    private static function hasId()
    {
        return !empty($_GET['id']) ? true : false;
    }

    private function titleHandler()
    {
        return (!empty($this->title)) ? "<h3>{$this->title}</h3>" : '';
    }

    public function render(): string
    {
        $output = parent::render();
        return <<<HTML
                <form action="{$this->url}" name="{$this->name}" id="{$this->name}" method="{$this->method}">
                    {$this->titleHandler()}
                    $output
                </form>
                HTML;
    }

    public function getFieldsetName()
    {
        foreach ($this->fields as $field) {
            if ($field instanceof Fieldset) {
                return $field->name;
            }
        }
    }
}
