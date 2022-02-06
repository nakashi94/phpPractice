<?php

declare(strict_types=1);

class Logger
{
    private $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function write(string $data): void
    {
        file_put_contents($this->fileName, $data, FILE_APPEND);
    }

    public function clear(): void
    {
        file_put_contents($this->fileName, '');
    }
}
