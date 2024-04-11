<?php

namespace Jobsheet\Ex\Classes\Abstracts;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Container;

abstract class Component
{
    protected static array $compatibleWith = [];

    public static function compatibleWith(): array
    {
        return static::$compatibleWith;
    }

    abstract protected static function createElements(): array;

    protected static function combineElements(FormElement $container): FormElement
    {
        $containerClasses = ['flex', 'justify-center', 'justify-items-center'];

        foreach (static::createElements() as $key => $element) {
            $row = new Container($key, $containerClasses);
            foreach ($element as $field) {
                $row->add($field);
            }
            $container->add($row);
        }
        return $container;
    }

    abstract public static function build(): FormElement;

    abstract public static function loadData(FormElement $form): void;
}
