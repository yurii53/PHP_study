<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Ваше ім'я: <input type="text" name="names"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['names'])) {
    
    $str = $_POST['names'];
    $arr = explode(",", str_replace(" ", "", $str));
    sort($arr);
    echo implode(", ", $arr);
}
?>

</body>
</html>
