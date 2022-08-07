<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Ваш емеіл: <input type="text" name="email"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $pattern = '/^[\dA-z-_\.]+@([A-z]+\.)+[A-z-]{2,4}$/i';
    if (preg_match($pattern, $email)){
    echo "email is valid<br>";
}
    else echo "email is not valid<br>";
    
}
?>

</body>
</html>

