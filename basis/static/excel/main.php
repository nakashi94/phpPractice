<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__FILE__) . '/ExcelColumnConverter.php';
    echo ExcelColumnConverter::calcAlphabetColumnName(3), PHP_EOL;
    echo ExcelColumnConverter::calcNumberColumnName('F');
    ?>
</body>
