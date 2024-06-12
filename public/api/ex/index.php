<?php

require_once dirname(__DIR__) . '../../../vendor/autoload.php';

use Jobsheet\Ex\Utils\Helper;

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        Helper::print(count($_POST));
        Helper::export($_POST);
        break;

    default: // GET Request
        if (empty($_SERVER['PATH_INFO'])) return;
        preg_match('/\d.*/', $_SERVER['PATH_INFO'], $id);
        $mockData['id'] = $id;
        // Get data from DB
        $json = <<<JSON
                {"header":[{"single_phase":true,"2_speed":true,"lv":true,"mv":true,"dc":true},{"job_no":"Job No","incoming_date":"2024-01-01","delivery_date":"2024-01-01"},{"customer":"Ei-Ei","tel":"02-xxx-xxxx","fax":"02-xxx-xxxx"}]}
                JSON;
        $mockData = json_decode($json, true);
        header('Content-Type: application/json');
        echo json_encode($mockData);
        break;
}
