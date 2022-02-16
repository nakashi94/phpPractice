<?php

declare(strict_types=1);

$char = 'aAabd1_sscc';
if (preg_match("/[a-zA-z]{1,}$/i", $char, $result)) {
    echo '検索成功';
    print_r($result);
} else {
    echo '検索失敗';
}
