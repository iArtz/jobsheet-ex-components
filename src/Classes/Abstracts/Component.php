<?php

namespace Jobsheet\Ex\Classes\Abstracts;

use Exception;
use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\ContainerElement;
use Jobsheet\Ex\Classes\Form;
use Jobsheet\Ex\Classes\Fieldset;
use Jobsheet\Ex\Classes\Input;

abstract class Component
{
    protected static array $compatibleWith = [];
    protected static array $data = [];
    protected static array $methods = [
        'loadData',
        'getData'
    ];

    public static function compatibleWith(): array
    {
        return static::$compatibleWith;
    }

    protected static function combineElements(Fieldset $container): FormElement
    {
        $containerClasses = ['flex', 'justify-around'];

        foreach (static::createElements() as $key => $element) {
            $row = new ContainerElement($key, $containerClasses);
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
        $button = new Input('component', 'Save', 'submit');
        $button->setData($config->fieldset->name);
        $form->add($button);
        return $form;
    }

    abstract protected static function createElements(): array;
    abstract public static function build(): FormElement;

    public static function __callStatic($name, $arguments)
    {
        if (!in_array($name, static::$methods)) {
            throw new Exception('Method ' . $name . ' is does not exist.');
        }

        $count = count($arguments);

        if ($name == 'loadData') {
            if ($count == 1) {
                [$data] = $arguments;
                $componentName = array_key_first(static::$data);
                if (!is_array($data)) throw new Exception('Data must be array');
                $dataFiltered = array_filter($data, function ($tuple) use ($componentName) {
                    return $tuple == $componentName;
                }, ARRAY_FILTER_USE_KEY);
                if (!empty($dataFiltered)) {
                    static::$data = $dataFiltered; // Pass data
                }
                $form = static::build();
                $form->setData(static::$data); // Mock data
                return $form;
            }
        }

        if ($name == 'getData') {
            return static::$data;
        }
    }
}
