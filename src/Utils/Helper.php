<?php

namespace Jobsheet\Ex\Utils;

class Helper
{
    public static function print($data): void
    {
        echo "<pre>";
        echo $data;
        echo "</pre>";
    }

    public static function prettyArray($data): void
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    public static function export($data): void
    {
        echo "<pre class='h-auto text-xs leading-normal overflow-auto border-4 rounded text-wrap'>";
        var_export($data);
        echo "</pre>";
    }

    public static function arrayToObject(array $array): object
    {
        return json_decode(json_encode($array));
    }

    public static function getCurrentDate()
    {
        return date('Y-m-d');
    }

    public static function randomString(int $length = 6): string
    {
        return substr(md5(microtime()), 0, $length);
    }
}
