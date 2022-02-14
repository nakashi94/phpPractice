<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/objects/message.php';

switch (strtolower($_SERVER['REQUEST_METHOD'])) {
    case 'get':
        echo json_encode(getMessage());
        break;
    case 'post':
        echo json_encode(postMessage());
        break;
    case 'put':
        echo json_encode(putMessage());
        break;
    case 'delete':
        echo json_encode(deleteMessage());
        break;
}
