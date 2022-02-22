<?php

declare(strict_types=1);

$s = "abcasdvabc";
preg_match("/abc/", $s, $result);
print_r($result);
