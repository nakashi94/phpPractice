<?php

declare(strict_types=1);

class MyFileWriter
{
    public string $filename;
    public string $content = "";
    public const APPEND = FILE_APPEND;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function append(string $content): static
    {
        $this->content .= $content;
        return $this;
    }

    public function newLine(): static
    {
        return $this->append(PHP_EOL);
    }

    public function commit($flag = 0)
    {
        file_put_contents($this->filename, $this->content, $flag);
        $this->content = "";
        return $this;
    }
}

class LogWriter extends MyFileWriter
{
    public string $content = '';
    public const APPEND = FILE_APPEND;

    public function __construct(string $filename)
    {
        parent::__construct($filename);
    }

    public function append(string $content): static
    {
        $this->content .= sprintf("%s %s", date("Y/m/d H:m:s"), $content);
        return $this;
    }

    public function newLine(): static
    {
        return parent::append(PHP_EOL);
    }
}

$file = new MyFileWriter("sample.txt");
$file->append("Hello, Bob.")
    ->newLine()
    ->append("Bye, ")
    ->append("Bob.")
    ->newLine()
    ->commit()
    ->append('Good night, Bob.')
    ->commit(MyFileWriter::APPEND);

$info = new LogWriter('info.log');
$error = new LogWriter('error.log');

$info->append('これは通常ログです。')
    ->newLine()
    ->commit(LogWriter::APPEND);

$error->append('これはエラーログです。')
    ->newLine()
    ->commit(LogWriter::APPEND);
