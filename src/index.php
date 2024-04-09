<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Jobsheet\Ex\Classes\Abstracts\FormElement;
use Jobsheet\Ex\Classes\Form;
use Jobsheet\Ex\Classes\Input;
use Jobsheet\Ex\Classes\Fieldset;
use Jobsheet\Ex\Classes\NewLine;

function getReportHeader(): FormElement
{
    $form = new Form('header', "TEST REPORT FOR LV. EXPLOSION PROOF MOTOR (For Ex d, Ex de)", "/header_exd/save");
    $motorType = new Fieldset('motor_type', 'Logos & Standard HERE!!!');
    $motorType->add(new Input('single_phase', 'Single Phase', 'checkbox'));
    $motorType->add(new Input('2_speed', '2 Speed', 'checkbox'));
    $motorType->add(new Input('lv', 'LV.', 'checkbox'));
    $motorType->add(new Input('mv', 'MV.', 'checkbox'));
    $motorType->add(new Input('dc', 'DC', 'checkbox'));

    $header = new Fieldset('header', 'Header');
    $header->add(new Input('job_no', "Job No", 'text'));
    $header->add(new Input('incoming_date', 'Incoming Date', 'date'));
    $header->add(new Input('delivery_date', 'Delivery Date', 'date'));
    $header->add(new NewLine);
    $header->add(new Input('customer', 'Customer', 'text'));
    $header->add(new Input('tel', 'Tel', 'text'));
    $header->add(new Input('fax', 'Fax', 'text'));

    $form->add($motorType);
    $form->add($header);

    return $form;
}

function loadData(FormElement $form)
{
    $DATE_FORMAT = 'Y-m-d';
    $data = [
        'motor_type' => [
            'single_phase' => true,
            '2_speed' => true,
            'lv' => true,
            'mv' => true,
            'dc' => true
        ],
        'header' => [
            'job_no' => 'Job No',
            'incoming_date' => date($DATE_FORMAT),
            'delivery_date' => date($DATE_FORMAT),
            'customer' => 'Customer',
            'tel' => '02-xxx-xxxx',
            'fax' => '02-xxx-xxxx'
        ]
    ];

    $form->setData($data);
}

function renderPage(FormElement $form): void
{
    ob_start();

    $template = <<<HTML
    <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ex d, Ex de</title>
        </head>
        <body>
        {$form->render()}
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        </body>
    </html>
    HTML;

    echo $template;

    $html = ob_get_clean();

    echo $html;
    // echo "<pre>";
    // var_export($form);
    // echo "</pre>";
}

$header = getReportHeader();
loadData($header);
renderPage($header);