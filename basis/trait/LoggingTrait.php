<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Logger.php';

trait LoggingTrait
{
    private $logger;
    private $logFileName;

    private function loadLogger(): void
    {
        if ($this->logFileName === null) {
            $this->logFileName = __CLASS__ . '.log';
        }
        $this->logger = new Logger($this->logFileName);
        $this->Logger->clear();
    }

    private function log(string $data): void
    {
        if ($this->logger === null) {
            $this->loadLogger();
        }
        $data = date('Y-m-d H:i:s') . ' ' . $data;
        $this->logger->write($data);
    }
}
