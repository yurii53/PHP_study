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
function mySort($a, $b)
{
$alph = "a b c d e f g h i j k l m n o p q r s t u v w x y z A B C D E F G H I J K L M N O P Q R S T U V W X Y Z а б в г ґ д е є ж з и і ї й к л м н о п р с т у ф х ц ч ш щ ь ю я А Б В Г Ґ Д Е Є Ж З И І Ї Й К Л М Н О П Р С Т У Ф Х Ц Ч Ш Щ Ь Ю Я ! @ # $ % ^ & * ( ) - _ = + № [ ] { } ; : ' \" , . < > ? / \\ | ` ~ – ";

if (mb_strpos($alph, $a) > mb_strpos($alph, $b)) {return 1;}
elseif (mb_strpos($alph, $a) < mb_strpos($alph, $b)) {return 0;}
else {return 0;}
}

if (!empty($_POST['names'])) {
    $str = $_POST['names'];
echo "str: $str <br>";
//rundomvікйачїєию@%*\/:\?₩awzesxdrcftvgяцфіуїєячвскамп
    
    $pattern1 = '/[rundomvікйачю@%*\/:\?₩]/iu';
    $str = preg_replace($pattern1, "", $str);
echo "перша фільтрація: $str <br>";
    $str = mb_strtoupper($str);
echo "великі букви: $str <br>";
    $pattern2 = '/[ЇЄЯИ]/u';
    $str = preg_replace($pattern2, "", $str);
echo "друга фільтрація: $str <br>";
    $str = mb_strtolower($str);
echo "малі букви фільтрація: $str <br>";
    $pattern3 = '/[wzxc]/i';
    $str = preg_replace($pattern3, "", $str);
echo "третя фільтрація: $str <br>";
    $pattern4 = '/(.)/iu';
    $str = preg_replace($pattern4, "$1 ", $str);
    $arr = explode(" ", trim($str));
    
    usort($arr,"mySort") ;
    echo "<br>відсортований масив:" . implode("--", $arr);
    //echo count($arr);
    if (count($arr)%2==0)
    {   
        $n = (int)(count($arr)/4);  
    } else
    {
        $n = round(count($arr)/4);
    }

    for ($i=0; $i<$n; $i++)
    {
        array_shift($arr);
        array_pop($arr);
    }
echo "<br> обрізаний масив:" . implode("--", $arr);
}
?>

</body>
</html>
