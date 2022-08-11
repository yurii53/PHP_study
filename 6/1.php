<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<?php

$f1 = "/home/yurii/Desktop/html/6/source.txt";
$f2 = fopen($f1, "r");
$f3 = fread($f2, filesize($f1));
fclose($f2);
echo $f3;
//var_dump(preg_split('/[\s\n]/i', $f3));
$f4 = join(' ', array_reverse(preg_split('/[\s\n]/i', $f3)));
echo $f4;
$f5 = fopen("/home/yurii/Desktop/html/6/dest.txt", "w");
fwrite($f5, $f4);
fclose($f5);
?>

</body>
</html>
