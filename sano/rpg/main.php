<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/class/Human.php';
require_once dirname(__FILE__) . '/class/Monster.php';

// インスタンス化
$human = new Human("Kaito", 100, 30);
$Monster = new Monster("Slime", 50, 10);
$human->doAttack($human->name);
