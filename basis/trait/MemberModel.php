<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/LoggingTrait.php';

class MemberModel
{
    use LoggingTrait;

    public function __construct()
    {
        // 独自のログファイル名を指定したい場合は以下をコメントアウトします。
        // $this->logFileName = 'my-log.log';
    }

    public function create(string $memberId): void
    {
        $this->log("created {$memberId}.", PHP_EOL);
    }

    public function delete(string $memberId): void
    {
        $this->log("deleted {$memberId}.", PHP_EOL);
    }
}
