<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<?php

class Square
{
    public $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function area(): float
    {
        return $this->a ** 2;
    }
}

class Rectangle
{
    public $a;

    public $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function area(): float
    {
        return 2 * ($this->a + $this->b);
    }
}

class Triangle
{
    public $a;

    public $b;

    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function area(): float
    {
        $p = ($this->a + $this->b + $this->c)/2;
        $s = ($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c)) ** 0.5;
        return $s;
    }
}

class Circle
{
    public $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function area(): float
    {
        return $this->r * 2 * M_PI;
    }
}

$f1 = new Square(5.3);
echo "Площа квадрата " . $f1->area() . "<br>";

$f2 = new Rectangle(5.3, 8.1);
echo "Площа прямокутника " . $f2->area() . "<br>";

$f3 = new Triangle(5.3, 5.2, 10);  //Будь-яка сторона довільного трикутника менша
// за суму двох інших його сторін та більша за їх різницю. (с)Евклід

echo "Площа трикутника " . $f3->area() . "<br>";

$f4 = new Circle(5.3);
echo "Площа круга " . $f4->area() . "<br>";

?>
</body>
</html>




