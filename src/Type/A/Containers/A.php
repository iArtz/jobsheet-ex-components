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
use Jobsheet\Ex\Type\A\Components\StaticTest;
use Jobsheet\Ex\Utils\Helper;
use stdClass;

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
    ];
    private static object $data;

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
                $component::loadData($forms[$key]);
            }
        }
    }

    public static function renderPage(): void
    {
        $forms = static::initialForm();

        static::loadData($forms);

        $container = '';

        foreach ($forms as $form) {
            $container .= $form->render();
        }

        ob_start();

        $template = <<<HTML
                    <html>
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link rel="stylesheet" href="assets/styles/app.css">
                            <title>Ex d, Ex de</title>
                        </head>
                        <body>
                            <div class="container">
                                {$container}
                            </div>
                            <script src="https://cdn.tailwindcss.com"></script>
                            <script>
                            tailwind.config = {
                                theme: {
                                    container: {
                                        center: true,
                                        padding: {
                                            DEFAULT: '1rem',
                                            sm: '2rem',
                                            lg: '4rem',
                                            xl: '5rem',
                                            '2xl': '6rem',
                                        }
                                    }
                                }
                            }
                            </script>
                        </body>
                    </html>
                    HTML;

        echo $template;

        $html = ob_get_clean();

        if (isset($_GET['debug'])) {
            Helper::export($forms);
        }

        echo $html;
    }

    public static function setData(object $data): void
    {
        static::$data = $data;
    }

    protected static function filterComponentsByMotorType(): stdClass
    {
        $classes = [];
        $builders = [];
        foreach (static::$components as $component) {
            if (
                in_array(static::$data->motor_type, $component::compatibleWith())
                || (isset(static::$data->debug) && static::$data->debug)
            ) {
                $classes[] = $component;
                $builders[] = $component::build();
            }
        }

        return (object) ['classes' => $classes, 'builders' => $builders];
    }
}
