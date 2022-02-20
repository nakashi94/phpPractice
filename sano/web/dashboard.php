<?php

declare(strict_types=1);

session_start();

if (
    isset($_POST['username'])
    && isset($_POST['password'])
    && $_POST['username'] === "test"
    && $_POST['password'] === "test"
) {
    // login OK
    $_SESSION['user'] = [
        'name' => $_POST['username'],
        'password' => $_POST['password']
    ];
}

if (!empty($_SESSION['user'])) {
    echo "ログイン中です。";
} else {
    echo "ログインしてください。";
}
