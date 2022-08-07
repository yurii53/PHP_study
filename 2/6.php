<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Ваше ім'я': <input type="text" name="text"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['text'])) {
    $text = $_POST['text'];
    $pattern = '/\b(h?[t|f]tp:\/\/[\dA-z-_\.]+\.[A-z-]{2,4}(\/[A-z-]+)*)\b/i';
    $text = preg_replace($pattern, '<a href=$1>$1</a>', $text);
    echo $text;
}
?>

</body>
</html>
