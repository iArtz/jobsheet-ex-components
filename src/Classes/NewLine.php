<?php

namespace Jobsheet\Ex\Classes;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Utils\RandomString;

class NewLine extends FormElement
{
    public function __construct()
    {
        $randomString = RandomString::generate();
        $name = $randomString;
        $title = $randomString;
        parent::__construct($name, $title);
    }
    public function render(): string
    {
        return '<br/>';
    }
}