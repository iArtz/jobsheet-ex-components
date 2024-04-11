<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Jobsheet\Ex\Type\A\Components\Header;
use Jobsheet\Ex\Type\A\Components\MachineDetail;
use Jobsheet\Ex\Type\A\Components\MachineDetailSinglePhase;

function renderPage(array $forms): void
{
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
        echo "<pre>";
        var_export($forms[0]->fields);
        echo "</pre>";
    }

    echo $html;
}

$header = Header::build();
Header::loadData($header);
$machineDetail = MachineDetail::build();
$machineDetailSinglePhase = MachineDetailSinglePhase::build();
renderPage([$header, $machineDetail, $machineDetailSinglePhase]);
