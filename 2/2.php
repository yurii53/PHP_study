<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Email: <input type="text" name="email"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "email is valid<br>";
}
    else echo "email is not valid<br>";
    
}
?>

</body>
</html>
