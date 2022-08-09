<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
function simplFibo($count)
{
    if ($count == 1)
    {
        echo 1;
        return;
    }
    $previos = 1;
    $curent = 1;
    echo "1 1";
    for ($i = 2; $i < $count; $i++)
    {
        $tmp = $curent;
        $curent += $previos;
        $previos = $tmp;
        echo " $curent";
    }
    return;
}

function recursFibo($count)
{
    //$count = 20;
    if ($count == 1)
    {
        echo 1;
        return;
    } 
    static $previos = 1;
    static $curent = 1;
    static $i = 3;
    if ($i == 3)
    {
        echo "1 1";
    }
    
    if ($i > $count) return;
    $tmp = $curent;
    $curent += $previos;
    $previos = $tmp;
    $i++;
    echo " $curent";
    recursFibo($count);
}

simplFibo(20);
echo "<br>";
recursFibo(20);
?>

</body>
</html>
