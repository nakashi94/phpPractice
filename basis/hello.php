<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
</head>

<body>
    <h1>phpでHello World!</h1>
    <?php $greeting = "こんにちは、世界！"; ?>
    <p><?php echo $greeting; ?></p>
    <?php $num = 12; ?>
    <?php echo var_dump($num), var_dump($greeting); ?>

    <?php $month = 12; ?>

    <?php
    // ヒアドキュメント
    $mailBody = <<< MAIL
お問い合わせを受け付けました。


■お問い合わせ内容は以下の通りです。
・{$month}月〇日〇時〇〇分
MAIL;
    ?>
    <p>
    <pre><?php echo $mailBody; ?></pre>
    </p>
    <?php $num = 12.3 ?>
    <p><?php echo (int)($num) ?></p>
</body>
