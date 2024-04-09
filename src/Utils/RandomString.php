<?php

namespace Jobsheet\Ex\Utils;

class RandomString
{
    const LENGTH = 6;
    public static function generate(): string
    {
        return substr(md5(microtime()), 0, self::LENGTH);
    }
}