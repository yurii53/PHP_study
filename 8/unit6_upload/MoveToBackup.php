<?php

class MoveToBackup
{
    const UPLOAD_DIR = "/home/yurii/Desktop/html/8/unit6_upload/upload/";
    const SOURCE = "/home/yurii/Desktop/html/8/unit6_upload/";

    public function __construct()
    {
        if (!in_array("backup", scandir($this::SOURCE)))
        {
            chdir($this::SOURCE);
            mkdir("backup");
        }
    }

    public function MoveToBackup($dir = "")
    {
        if ($dir == "")
        {
            $dir = self::UPLOAD_DIR;
        }
        $backup = "/home/yurii/Desktop/html/8/unit6_upload/backup/";
        $files = scandir($dir);
        $pattern = "/file_([0-9][0-9][0-9][0-9][0-9][0-9]).txt/i";
        foreach ($files as $filename)
        {
            if (preg_match($pattern, $filename))
            {
                $a = preg_replace($pattern, "$1", $filename);
                if ((date('ymd')-3) >= $a)
                {
                    copy($dir . $filename, $backup . $filename);
                    unlink($dir . $filename);
                }
            }
        }
    }




}