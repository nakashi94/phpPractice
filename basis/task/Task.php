<?php

declare(strict_types=1);

class Task
{
    public $name;

    public $priority;

    public $progress;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->priority = 1;
        $this->progress = 0;
    }

    public function isCompleted(): bool
    {
        return $this->progress >= 100;
    }
}
