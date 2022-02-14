<?php
session_start();
if (isset($_SESSION['VISIT_COUNT'])) {
    $_SESSION['VISIT_COUNT']++;
} else {
    $_SESSION['VISIT_COUNT'] = 1;
}
?>
<h1>訪問回数は<?php echo $_SESSION['VISIT_COUNT']; ?> 回目です。</h1>

<?php
$visit_count = 1;
if (isset($_COOKIE['VISIT_COUNT'])) {
    $visit_count = $_COOKIE['VISIT_COUNT'] + 1;
}
setcookie('VISIT_COUNT', $visit_count);
?>
<h1>訪問回数は <?php echo $_COOKIE['VISIT_COUNT']; ?> 回目です。</h1>
