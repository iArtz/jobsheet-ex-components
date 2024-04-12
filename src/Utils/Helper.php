<?php

namespace Jobsheet\Ex\Utils;

class Helper
{
    public static function export($data): void
    {
        echo "<pre>";
        var_export($data);
        echo "</pre>";
    }

    public static function arrayToObject(array $array): object
    {
        return json_decode(json_encode($array));
    }
}
