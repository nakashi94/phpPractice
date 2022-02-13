<?php

declare(strict_types=1);

abstract class Clock
{
    protected $time;

    abstract public function show(): string;

    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    public function getTime(): int
    {
        return $this->time;
    }
}
