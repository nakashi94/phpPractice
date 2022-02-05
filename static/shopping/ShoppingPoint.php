<?php

declare(strict_types=1);

class ShoppingPoint
{
    public static $point;

    public static function countUpPoint()
    {
        self::$point++;
    }
}
