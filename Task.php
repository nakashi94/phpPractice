<?php

declare(strict_types=1);

class Task
{
    public $name;

    public $priority;

    public $progress;

    public function isCompleted(): bool
    {
        return $this->progress >= 100;
    }
}
