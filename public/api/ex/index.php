<?php

require_once dirname(__DIR__) . '../../../vendor/autoload.php';

use Jobsheet\Ex\Classes\Abstracts\MotorType;
use Jobsheet\Ex\Utils\Helper;

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        Helper::print(count($_POST));
        Helper::export($_POST);
        break;

    case 'GET':
        if (empty($_SERVER['QUERY_STRING'])) {
            Helper::export($_SERVER);
            break;
        }
        $required = [
            'id' => $_GET['id'] ?? null,
        ];

        $json = file_get_contents(dirname(dirname(dirname(__DIR__))) . '/tests/fixtures.json');
        $parseJson = json_decode($json, true);
        $data = array_merge($required, $parseJson);
        header('Content-Type: application/json');
        echo json_encode($data);
        break;
}
exit;
