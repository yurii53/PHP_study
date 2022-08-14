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
include "/home/yurii/Desktop/html/8/unit6_upload/MoveToBackup.php";
include "/home/yurii/Desktop/html/8/unit6_upload/DeleteFileWithTest.php";

$upload_dir = "/home/yurii/Desktop/html/8/unit6_upload/upload/";

if (isset($_FILES['filename'])) {
    $filename = $_FILES['filename']['name'];
    $tmp_filename = $_FILES['filename']['tmp_name'];
    move_uploaded_file($tmp_filename, "$upload_dir/$filename");
}


$a = new MoveToBackup();
$a->MoveToBackup();

$b = new DeleteFileWithTest();
$b->start();



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
