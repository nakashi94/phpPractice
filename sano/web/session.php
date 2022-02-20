<?php
session_start();

if (isset($_SESSION["visit_count"])) {
    $_SESSION["visit_count"]++;
} else {
    $_SESSION["visit_count"] = 1;
};

print_r($_SESSION);

echo "訪問回数は {$_SESSION["visit_count"]} 回目です。";
