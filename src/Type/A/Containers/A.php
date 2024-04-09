<?php

namespace Jobsheet\Ex\Type\A\Containers;

use Jobsheet\Ex\Type\A\Components\Header;

class A
{
    const TYPE = 'A';
    public static function render()
    {
        return [
            'type' => static::TYPE,
            'components' => 51,
            'Header' => Header::render()
        ];
    }
}