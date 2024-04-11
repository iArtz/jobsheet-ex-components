<?php

namespace Jobsheet\Ex\Classes\Abstracts;

use Jobsheet\Ex\Classes\Container;
use Jobsheet\Ex\Classes\Input;

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
        $itemClasses = ['flex-auto'];

        foreach (static::createElements() as $key => $record) {
            $row = new Container($key, $containerClasses);
            foreach ($record as $key => $element) {
                $col = new Container($key, $itemClasses);
                if ($element instanceof Input) {
                    $col->add($element);
                } else {
                    $row->add($element);
                    continue;
                }
                $row->add($col);
            }
            $container->add($row);
        }
        return $container;
    }
}
