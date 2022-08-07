<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Ваше ім'я: <input type="text" name="name"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['name'])) {
    $name = trim($_POST['name'], " \n\r\t\v\0");
    $pattern = '/(^[А-яA-z])|( [А-яA-z])/u';
    preg_match_all($pattern, $name, $arr);
    $a = mb_strtoupper(implode($arr[0]));
    echo str_replace(' ', '.', $a);
}
?>

</body>
</html>

