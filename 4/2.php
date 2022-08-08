<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<?php

define('m', 5);
define('n', 6);
for($i=0; $i<m; $i++){
    for($j=0; $j<n; $j++){
        $arr[$i][$j] = rand();
    }

}
for($i=0; $i<m; $i++){
    for($j=0; $j<n; $j++){
        echo $arr[$i][$j] . ", ";
    }
    echo "<br>";
}
?>

</body>
</html>
