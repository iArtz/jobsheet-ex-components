<?php

namespace Jobsheet\Ex\Classes\Abstracts;

use Exception;
use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Utils\Helper;

abstract class Container
{
    protected static array $components = [];
    protected static array $forms = [];
    protected static array $data;
    protected static string $title = '';
    protected static string $container = '';

    abstract protected static function renderHTML(): string;

    protected static function initialForm()
    {
        $components = static::filterComponentsByMotorType();
        static::$components = $components->classes;
    }

    protected static function loadData(): void
    {
        foreach (static::$components as $key => $component) {
            if (is_subclass_of($component, Component::class)) {
                static::$forms[] = $component::loadData(static::$data);
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
        static::initialForm();

        static::loadData();

        foreach (static::$forms as $form) {
            static::$container .= $form->render();
        }

        if (
            isset(static::$data['debug'])
            && static::$data['debug']
        ) {
            static::$title = 'Debug';
            Helper::export(static::$components); // debug
        }
        echo static::renderHTML();
    }

    protected static function filterComponentsByMotorType(): object
    {
        return static::componentsDTO(static::componentsFilterByMotorType());
    }

    private static function componentsFilterByMotorType(): array
    {
        $classes = [];
        foreach (static::$components as $component) {
            if (
                (isset(static::$data['motor_type'])
                    && in_array(static::$data['motor_type'], $component::compatibleWith()))
                || (isset(static::$data['showAll'])
                    && static::$data['showAll'])
            ) {
                $classes[] = $component;
            }
        }

        return $classes;
    }

    private static function componentsDTO(array $components): object
    {
        if (
            isset(static::$data['develop'])
            && static::$data['develop']
        ) {
            $latestComponent = end(static::$components);
            return (object) [
                'classes' => [$latestComponent],
            ];
        }

        return (object) [
            'classes' => $components
        ];
    }

    public function __toString(): string
    {
        return static::renderHTML();
    }

    public static function getComponents()
    {
        return static::$components;
    }
}
