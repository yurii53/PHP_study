<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Ваш рядок: <input type="text" name="arr"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['arr'])) 
{
    $str = $_POST['arr'];
    $regex = "/([a-zA-Z!@#$%^&*()])/";
    if (preg_match($regex, $str))
    {
        echo "wrong data";
        exit; 
    }
    $arr = explode(',', $str);
    foreach($arr as $num)
    {
        if ($num<1 || $num>100)
        {
            echo "wrong data";
            exit;        
        }
    }
    foreach($arr as $num)
    {
        echo str_repeat("<span style=\"background:red\">&nbsp</span>", $num) . $num . "<br>";
    }
}
?>

</body>
</html>

