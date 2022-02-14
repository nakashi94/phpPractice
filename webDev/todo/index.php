<?php
session_start();
$self_url = $_SERVER['PHP_SELF'];
?>

<form action="<?php $self_url ?>">
    <input type="text" name="title">
    <input type="submit" name="type" value="create">
</form>

<?php
if (isset($_POST["type"])) {
    if ($POST["type"] === "create") {
        $_SESSION["todos"][] = $_POST['title'];
        echo "新しいタスク{$_POST['title']}が追加されました。";
    };
}

if (empty($_SESSION['todos'])) {
    $_SESSION["todos"] = [];
    echo "タスクを入力しましょう!";
    die();
}
