<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__FILE__) . '/MemberModel.php';
    $memberModel = new MemberModel();
    $memberModel->create('001');
    $memberModel->delete('001');
    echo file_get_contents('MemberModel.log');
    ?>
</body>
