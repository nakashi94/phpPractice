<?php

declare(strict_types=1);

try {
    $bool = false;
    // $bool->method();
    echo '通常処理が最後まで実行されました。<br>';
} catch (Error $e) {
    echo '例外処理が実行されました。<br>';
    echo $e->getMessage();
} finally {
    echo '終了処理が実行されました。<br>';
}
