<?php

declare(strict_types=1);

function getMessage()
{
    $response = [
        'status' => 'success',
        'message' => 'ユーザID:' . $_GET['userId'] . 'が持つ' . $_GET['days'] . '日以内のメッセージを取得しました。'
    ];
    return $response;
}

function postMessage()
{
    $response = [
        'status' => 'success',
        'message' => 'ユーザID:' . $_POST['userId'] . 'によるメッセージ「' . $_POST['message'] . '」を投稿しました。'
    ];
    return $response;
}

function putMessage()
{
    parse_str(file_get_contents('php://input'), $putRequest);
    $response = [
        'status' => 'success',
        'message' => 'メッセージID:' . $putRequest['messageId'] . 'のメッセージを「' . $putRequest['message'] . '」に変更しました。'
    ];
    return $response;
}

function deleteMessage()
{
    parse_str(file_get_contents('php://input'), $deleteRequest);
    $response = [
        'status' => 'success',
        'message' => 'メッセージID:' . $deleteRequest['messageId'] . 'のメッセージを削除しました。'
    ];
    return $response;
}
