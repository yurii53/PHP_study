<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
class Calculator
{
    public function sum(float $a, float $b): float
    {
        return $a + $b;
    }

    public function sub(float $a, float $b): float
    {
        return $a - $b;
    }

    public function mul(float $a, float $b): float
    {
        return $a * $b;
    }

    public function div(float $a, float $b): float
    {
        if ($b == 0)
        {
            return "error: division by zero";
        }
        return $a / $b;
    }
}

echo "a = 0.25; b = 5.0 <br>";
$a = new Calculator();
echo "Додавання: " . $a->sum(0.25, 5) . "<br>";
echo "Віднімання: " . $a->sub(0.25, 5) . "<br>";
echo "Множення: " . $a->mul(0.25, 5) . "<br>";
echo "Ділення: " . $a->div(0.25, 5) . "<br>";
echo "Ділення на нуль: " . $a->div(0.25, 0) . "<br>"; //нічо не видасть
echo "Ділення: " . $a->div(0.25, "a") . "<br>"; //нічо не видасть

?>

</body>
</html>
