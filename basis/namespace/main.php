<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__FILE__) . '/office/word/Writer.php';
    require_once dirname(__FILE__) . '/office/excel/Writer.php';

    $writer = new \Office\Word\Writer();
    $writer->write();

    $writer = new \Office\Excel\Writer();
    $writer->write();
    ?>
</body>
