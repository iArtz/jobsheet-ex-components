<?php

namespace Jobsheet\Ex\Classes\Abstracts;

use Exception;
use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Utils\Helper;

abstract class Container
{
    protected static array $components = [];
    protected static array $data;
    protected static string $title = '';
    protected static string $container = '';

    abstract protected static function renderHTML(): string;

    protected static function initialForm()
    {
        $components = static::filterComponentsByMotorType();
        static::$components = $components->classes;
        return $components->builders;
    }

    protected static function loadData(array $forms): void
    {
        if (empty($forms)) throw new Exception('Forms dose not exists.');
        foreach (static::$components as $key => $component) {
            if (is_subclass_of($component, Component::class)) {
                $fieldsetName = $forms[$key]->getFieldsetName();
                if (isset($fieldsetName) && isset(static::$data[$fieldsetName])) {
                    $component::loadData(
                        $forms[$key],
                        [$fieldsetName => static::$data[$fieldsetName]]
                    );
                } else {
                    $component::loadData(
                        $forms[$key]
                    );
                }
            }
        }
    }

    public static function setData(array $data = []): void
    {
        if ((getenv('APP_ENV') != 'development')
            && empty($data['motor_type'])
        ) throw new Exception('Please set motor_type.');
        static::$data = $data;
    }

    public static function getData(): array
    {
        $data = [];
        foreach (static::$components as $key => $component) {
            if (is_subclass_of($component, Component::class)) {
                $data[] = $component::getData();
            }
        }
        return $data;
    }

    public static function renderPage(): void
    {
        $forms = static::initialForm();

        static::loadData($forms);

        foreach ($forms as $form) {
            static::$container .= $form->render();
        }

        if (
            isset(static::$data['debug'])
            && static::$data['debug']
        ) {
            static::$title = 'Debug';
            Helper::export($forms); // debug
        }
        echo static::renderHTML();
    }

    protected static function filterComponentsByMotorType(): object
    {
        return static::classHandler(static::classFilter());
    }

    private static function classFilter(): array
    {
        $classes = [];
        $builders = [];
        foreach (static::$components as $component) {
            if (
                (isset(static::$data['motor_type'])
                    && in_array(static::$data['motor_type'], $component::compatibleWith()))
                || (isset(static::$data['showAll'])
                    && static::$data['showAll'])
            ) {
                $classes[] = $component;
                $builders[] = $component::build();
            }
        }

        return [$classes, $builders];
    }

    private static function classHandler(array $args): object
    {
        [$classes, $builders] = $args;
        if (
            isset(static::$data['develop'])
            && static::$data['develop']
        ) {
            $latestComponent = end(static::$components);
            return (object) [
                'classes' => [$latestComponent],
                'builders' => [$latestComponent::build()]
            ];
        }

        return (object) [
            'classes' => $classes,
            'builders' => $builders
        ];
    }

    public function __toString(): string
    {
        return static::renderHTML();
    }
}
