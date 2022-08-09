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
function suma(array $arr)
{
    $result = 0;
    foreach($arr as $number)
    {
        $result += $number;
    }
return $result;
}

function evenCount(array $arr)
{
    $even_count = 0;
    foreach($arr as $number)
    {
        if ($number%2==0)
        {
            $even_count ++;
        }
    }
return $even_count;
}

function echoOdd(array $arr)
{
     foreach($arr as $number)
    {
        if ($number%2==1)
        {
            echo "$number <br>";
        }
    }
    return 0;   
}

if (!empty($_POST['names'])) {
    $str = $_POST['names'];
    if (preg_match('/[A-z.\"\':;\\|\/*\-+=!@#$%^&*()]/iu', $str))
    {
        echo "wrong data";
        exit;
    }
    $arr = explode(",", str_replace(" ", "", $str));
    
    echo "Ряд чисел:" . implode(", ", $arr) . "<br>";
    echo "Сума чисел:" . suma($arr) . "<br>";
    echo "Середнє значення:" . suma($arr)/count($arr) . "<br>";
    echo "Кількість парних:" . evenCount($arr) . "<br>";
    echo "Непарні: <br>";
    echoOdd($arr);
   
}
?>

</body>
</html>
