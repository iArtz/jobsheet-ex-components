<?php

namespace Jobsheet\Ex\Type\A\Containers;

use Jobsheet\Ex\Classes\Abstracts\Component;
use Jobsheet\Ex\Type\A\Components\CertificationDetails;
use Jobsheet\Ex\Type\A\Components\Header;
use Jobsheet\Ex\Type\A\Components\MachineDetails;
use Jobsheet\Ex\Type\A\Components\MachineDetailsDC;
use Jobsheet\Ex\Type\A\Components\MachineDetailsSinglePhase;
use Jobsheet\Ex\Type\A\Components\Pictures;
use Jobsheet\Ex\Type\A\Components\PicturesDC;
use Jobsheet\Ex\Type\A\Components\ResistanceInductanceTest;
use Jobsheet\Ex\Type\A\Components\StaticTest;
use Jobsheet\Ex\Utils\Helper;

class A
{
    const TYPE = 'A';
    private static array $components = [
        Header::class,
        MachineDetails::class,
        MachineDetailsSinglePhase::class,
        MachineDetailsDC::class,
        CertificationDetails::class,
        Pictures::class,
        PicturesDC::class,
        StaticTest::class,
        ResistanceInductanceTest::class,
    ];
    private static array $data;
    private static string $container = '';

    public static function initialForm()
    {
        $components = static::filterComponentsByMotorType();
        static::$components = $components->classes;
        return $components->builders;
    }

    public static function loadData(array $forms): void
    {
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
            Helper::export($forms); // debug
        }

        echo static::renderHTML();
    }


    public function __toString(): string
    {
        return static::renderHTML();
    }

    private static function renderHTML(): string
    {
        ob_start();
        require_once dirname(__DIR__) . '/Template/A.html';
        return ob_get_clean();
    }

    public static function setData(array $data = []): void
    {
        static::$data = $data;
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
}
