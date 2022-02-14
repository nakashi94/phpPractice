<?php

declare(strict_types=1); ?>

<body>
    <?php
    $params = [
        'userId' => 1001,
        'days' => 5
    ];
    $url = 'http://localhost/honkaku/practice/restAPI/server/objects/message.php' . http_build_query(($params));
    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    $apiResponse = json_decode(curl_exec($handle), true);
    curl_close($handle);
    ?>
    <p>サーバーからの応答</p>
    <pre><?php print_r($apiResponse); ?></pre>
</body>
