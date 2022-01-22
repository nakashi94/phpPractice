<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    function add($a, $b)
    {
        $total = $a + $b;
        return $total;
    }

    $result = add(1, 2);
    echo "実行結果：", $result;
    ?>
</body>

</html>
