<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Ваше ім'я: <input type="text" name="number"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['number'])) 
{
    if (is_numeric($number) && $number > 0 && $number <= 15)
    {
        for ($i=2;$i<=$number+1;$i++)
        {
            echo str_repeat('&nbsp;&nbsp;', $number-$i+2) . str_repeat('#',$i) . "<br>";
        }
    }
}
?>

</body>
</html>

