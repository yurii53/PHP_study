<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Мотор: <select name="motor" required="required"> 
            <option value="">Тип палива</option>
            <option value="50">Бензин</option>
            <option value="75">Дизель</option>
           </select><br>
    Об'єм двигуна(куб.см): <input type="number" name="capacity"><br>
    Рік випуску: <input type="number" name="year"><br>
    Вартість: <input type="number" name="price"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['motor'])&&!empty($_POST['capacity'])&&!empty($_POST['year'])&&!empty($_POST['price'])) 
{
    $motor = $_POST['motor'];
    $capacity = $_POST['capacity'];
    $year = $_POST['year'];
    $price = $_POST['price'];
    $age_k = (int)date("Y") - $year -1;

    if ($year<1970 || $year>2022)
    {
    echo "wrong data";
    exit;    
    }
    
    if ($age_k <= 0)
    {
    $age_k = 1;
    }
    
$akciz = $motor * $age_k * ($capacity/1000);
echo "Вартість акцизи: " . $akciz . "<br>Повна вартість автомобіля: " . ($price+$akciz);
    
}
?>

</body>
</html>
