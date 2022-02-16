<?php

declare(strict_types=1);

session_start();

$d = 3;

function ($a, $b) {
    $c = $a + $b;
    return $c;
};

$url = print_r($_SERVER['PHP_SELF']);
