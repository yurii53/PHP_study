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

function my_sort($a,$b)
{
$al = mb_strtolower(mb_substr($a, 0, 1));
$bl = mb_strtolower(mb_substr($b, 0, 1));
$d1 = 0;
$d2 = 0;
if ($al=='є')
{
$al="ж";
$d1 = 0.5;
} elseif($al=='і')
{
$al="й";
$d1=0.7;
}elseif($al=='ї')
{
$al="й";
$d1=0.3;
}
if ($bl=='є')
{
$bl="ж";
$d2 = 0.5;
} elseif($bl=='і')
{
$bl="й";
$d2 = 0.7;
}elseif($bl=='ї')
{
$bl="й";
$d2 = 0.3;
}
if (mb_ord($al)-$d1==mb_ord($bl)-$d2) return 0;
return (mb_ord($al)-$d1<mb_ord($bl)-$d2)?-1:1;
}
if (!empty($_POST['names'])) {
    
    $str = $_POST['names'];
    $arr = explode(",", str_replace(" ", "", $str));

    usort($arr,"my_sort");
    echo implode(", ", $arr);

}
?>

</body>
</html>
