<?php

namespace Jobsheet\Ex\Classes\Abstracts;

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Container;
use Jobsheet\Ex\Classes\Form;
use Jobsheet\Ex\Classes\Fieldset;

abstract class Component
{
    protected static array $compatibleWith = [];

    public static function compatibleWith(): array
    {
        return static::$compatibleWith;
    }

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

    protected static function createForm(object $config): FormElement
    {
        $form = new Form($config->form->name, $config->form->title, $config->form->action);
        $group = new Fieldset($config->fieldset->name, $config->fieldset->title . ' (' . join(', ', static::$compatibleWith) . ')');
        static::combineElements($group);
        $form->add($group);
        return $form;
    }

    abstract protected static function createElements(): array;

    abstract public static function build(): FormElement;

    abstract public static function loadData(FormElement $form): void;
}
