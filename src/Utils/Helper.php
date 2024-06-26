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
        echo "<pre class='h-auto text-xs leading-normal overflow-auto border-4 rounded text-wrap border-red-400'>";
        print_r($data);
        echo "</pre>";
    }

    public static function export($data): void
    {
        echo "<pre class='h-auto text-xs leading-normal overflow-auto border-4 rounded text-wrap border-green-400'>";
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
        return substr(md5(openssl_random_pseudo_bytes(20)), 0, $length);
    }

    public static function toJSON(array $array): string
    {
        return json_encode($array);
    }
}
