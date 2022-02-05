<?php

declare(strict_types=1);

class ExcelColumnConverter
{
    public static function calcAlphabetColumnName(int $number): string
    {
        return chr(ord('A') + $number);
    }

    public static function calcNumberColumnName(string $alphabet): int
    {
        return ord($alphabet) - ord('A');
    }
}
