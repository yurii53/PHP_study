<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Ваше ім'я: <input type="text" name="text"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['text'])) {
    
    $text = $_POST['text'];
    $arr = explode(" ", $text);
    $counter = 0;
    $c=0;
    foreach($arr as $word)
    {
        
        
        $counter += mb_strlen($word);

        if ($counter > 40)
        {
            $counter = mb_strlen($word);
            $new_arr[] = "<br>";
        }
        $counter ++;
        $new_arr[] = $word;

    }

    echo implode(" ", $new_arr) . "<br>";
}
?>

</body>
</html>
