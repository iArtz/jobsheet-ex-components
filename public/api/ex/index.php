<?php

require_once dirname(__DIR__) . '../../../vendor/autoload.php';

use Jobsheet\Ex\Utils\Helper;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    Helper::print(count($_POST));
    Helper::export($_POST);
}
