<html>
<head>
    <title>Форма завантаження файла</title>
    <meta charset="UTF-8">
    </head>
<body>
    
    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000" >
        Завантажити файл: <br><br>
        <input name="filename" type="file" ><br><br>
        <input type="submit" value="Завантажити" ><br><br>
    </form>
    
<?php 
$upload_dir = "/home/yurii/Desktop/html/6/unit6_upload/upload/";
$source = "/home/yurii/Desktop/html/6/unit6_upload/";

function deleteFileWithTest($file, $dir)
{
    $str = file_get_contents($dir . $file);
    if (preg_match('/тест/u', $str))
    {
        unlink($dir . $file);
    }
}

if (isset($_FILES['filename'])) {
    $filename = $_FILES['filename']['name'];
    $tmp_filename = $_FILES['filename']['tmp_name'];
    move_uploaded_file($tmp_filename, "$upload_dir/$filename");
}


$papky = scandir($source);
if (!in_array("backup", $papky))
{
    chdir($source);
    mkdir("backup");
} else
{
    moveFilesToBackup($upload_dir);
}

$files = scandir($upload_dir);
foreach ($files as $filename) 
{
    if (preg_match('/\.txt$/i', $filename))
    {
        deleteFileWithTest($filename, $upload_dir);
    }
}




function moveFilesToBackup($dir)
{
    $backup = "/home/yurii/Desktop/html/6/unit6_upload/backup/";
    $files = scandir($dir);

    foreach ($files as $filename) 
    {
        if (preg_match("/file_([0-9]){6}.txt/i", $filename))
        {
            $a = preg_replace("/file_([0-9][0-9][0-9][0-9][0-9][0-9]).txt/i", "$1", $filename);
            if ((date('ymd')-3) >= $a)
            {
                rename($dir . $filename, $backup . $filename);     
            }
        }
    }
}






/*
    $upload_files = scandir($upload_dir);
    //var_dump($upload_files);  
    foreach ($upload_files as $filename) {
if($filename !== "." && $filename !== ".." && getimagesize("$upload_dir/$filename") > 0) {
                echo '<img src="' . "$upload_dir/$filename" . '">';
                //echo date('r',filectime("$upload_dir/$filename"));
            } 

        }*/
    ?>

</body>
</html>
