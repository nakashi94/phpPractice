<?php

declare(strict_types=1);

function isFinish($objects)
{
    $deathCount = 0;
    foreach ($objects as $object) {
        if ($object->getGitPoint() > 0) {
            return false;
        }
        $deathCount++;
    }
    if ($deathCount === count($objects)) {
        return true;
    }
}
