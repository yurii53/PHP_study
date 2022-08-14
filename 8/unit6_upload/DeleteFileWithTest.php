<?php

class DeleteFileWithTest
{
    const UPLOAD_DIR = "/home/yurii/Desktop/html/8/unit6_upload/upload/";

    public function __construct()
    {
    }

    public function deleteFileWithTest($file, $dir)
    {
        $str = file_get_contents($dir . $file);
        if (preg_match('/тест/u', $str))
        {
            unlink($dir . $file);
        }
    }

    public function start($dir='')
    {
        if ($dir=='')
        {
            $dir = self::UPLOAD_DIR;
        }


        $files = scandir(self::UPLOAD_DIR);
        foreach ($files as $filename)
        {
            if (preg_match('/\.txt$/i', $filename))
            {
                $this->deleteFileWithTest($filename, $dir);
            }
        }
    }
}