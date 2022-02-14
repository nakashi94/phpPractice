<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__FILE__) . '/Task.php';
    require_once dirname(__FILE__) . '/TaskSheet.php';

    $taskSheet = new TaskSheet();

    $task1 = new Task('パスポートの更新');
    $task1->progress = 100;
    $taskSheet->addTask($task1);

    $task2 = new Task('食材の買い出し');
    $task2->progress = 50;
    $taskSheet->addTask($task2);

    echo PHP_EOL, '●タスクリストを表示します…', PHP_EOL;
    $taskSheet->show();
    ?>
</body>
