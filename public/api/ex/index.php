<?php

require_once dirname(__DIR__) . '../../../vendor/autoload.php';

use Jobsheet\Ex\Utils\Helper;

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        Helper::print(count($_POST));
        Helper::export($_POST);
        break;

    default:
        if (empty($_SERVER['PATH_INFO'])) return;
        preg_match('/\d.*/', $_SERVER['PATH_INFO'], $id);
        $data = [
            'id' => array_pop($id),
            'data' => [
                'D' => '',
                'component' => 'radial_air_gab_calculation',
            ]
        ];

        header('Content-Type: application/json');
        echo json_encode($data);
        break;
}
