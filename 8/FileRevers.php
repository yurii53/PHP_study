<?php

class FileRevers
{
    public $f1 = "/home/yurii/Desktop/html/8/source.txt";

    public $f2 = "/home/yurii/Desktop/html/8/dest.txt";

    public function __construct()
    {
    }

    public function readFile()
    {
        $f2 = fopen($this->f1, "r");
        $f3 = fread($f2, filesize($this->f1));
        fclose($f2);
        return $f3;
    }

    public function revers(): string
    {
        return join(' ', array_reverse(preg_split('/[\s\n]/i', $this->readFile())));
    }

    public function write()
    {
        $f5 = fopen($this->f2, "w");
        fwrite($f5, $this->revers());
        fclose($f5);
    }
}



$a = new FileRevers();
$a->write();