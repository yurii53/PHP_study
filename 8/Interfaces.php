<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<?php
interface IUser
{
    public function getName();
    public function setName(string $name);
    public function getAge();
    public function setAge(int $age);
    public function getGender();
    public function setGender(string $gender);
}


interface IEmployee extends IUser
{
    public function getSalary();
    public function setSalary(int $salary);
}


class Employee implements IEmployee
{

    private $name, $age, $gender, $salary;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender)
    {
        $this->gender = $gender;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }

}


$f1 = new Employee();
$f2 = new Employee();
$f1->setAge(12);
$f1->setGender("male");
$f1->setName("don");
$f1->setSalary(12345);
echo $f1->getName() . "<br>" . $f1->getGender() . "<br>" . $f1->getAge() . "<br>" .$f1->getSalary() . "<br>";
?>

</body>
</html>
