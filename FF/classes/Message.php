<?php

declare(strict_types=1);

class Message
{
    public function displayStatusMessage(array $objects): void
    {
        foreach ($objects as $object) {
            echo $object->getName() . "　：　" . $object->getHitPoint() . "/" . $object::MAX_HITPOINT . "\n";
        }
        echo "\n";
    }

    public function displayAttackMessage($objects, $targets): void
    {
        foreach ($objects as $object) {
            // $enemyIndex = rand(0, count($enemies) - 1);
            // $enemy = $enemies[$enemyIndex];
            // WhiteMageの場合、味方のオブジェクトも渡す
            if (get_class($object) == "WhiteMage") {
                $attackResult = $object->doAttackWhiteMage($targets, $objects);
            } else {
                $attackResult = $object->doAttack($targets);
            }
            if ($attackResult) {
                echo '\n';
            }
            $attackResult = false;
        }
        echo "\n";
    }
}
