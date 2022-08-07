<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Ваше ім'я': <input type="text" name="name"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['name'])) {
    $name = trim(preg_replace('/\s+/ui',' ',$_POST['name']));
    $pattern = '/^[а-щА-ЩЬьЮюЯяЇїІіЄєҐґ-]+\s[а-щА-ЩЬьЮюЯяЇїІіЄєҐґ-]+\s[а-щА-ЩЬьЮюЯяЇїІіЄєҐґ-]+$/ui';
    if (preg_match($pattern, $name)){
    echo "$name<br>";
}
    else echo "Ім'я введено невірно<br>";
}
?>

</body>
</html>

