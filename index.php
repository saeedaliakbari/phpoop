<?php

class Person
{
    public $name;
    public $family;
    public const AGE = 29;
    public static $population = 0;
    public function showInfo()
    {
        echo $this->name . "  " . $this->family . " " . Person::AGE . " " . Person::$population;
    }
}

// $p1 = new Person();
// $p1->name = "Saeed";
// $p1->family = "Aliakbari";
// Person::$population++;
// $p1->showInfo();
// echo '</br>';
// $p2 = new Person();
// $p2->name = "Saeed";
// $p2->family = "Aliakbari";
// Person::$population++;
// $p2->showInfo();
// echo '</br>';
// $p3 = new Person();
// $p3->name = "Saeed";
// $p3->family = "Aliakbari";
// Person::$population++;
// $p3->showInfo();
// echo "</br>";

class Time
{
    private $hour, $minute, $second;
    function __construct($h = 0, $m = 0, $s = 0)
    {
        if (!is_int($h) || $h < 0) $h = 0;
        if (!is_int($m) || $m < 0) $m = 0;
        if (!is_int($s) || $s < 0) $s = 0;
        while ($s > 59) {
            $s -= 60;
            $m++;
        }
        while ($m > 59) {
            $m -= 60;
            $h++;
        }
        while ($h > 23) {
            $h -= 24;
        }

        $this->hour = $h;
        $this->minute = $m;
        $this->second = $s;
    }
    function __destruct()
    {
        echo " stop time in ";
    }
    public function showTime()
    {
        echo $this->hour . ":" . $this->minute . ":" . $this->second;
    }
    public function __set($name, $value)
    {
        if ($name == "hour" || $name == "minute" || $name == "second")
            $this->$name = $value;
    }
    public function __get($name)
    {
        if ($name == "hour" || $name == "minute" || $name == "second")
            return $this->$name;
    }
}


$time = new Time();
// // $time->showTime();
// die("error");
// unset($time);
$time->hour = 12;
$time->showTime();

class Car
{
    public static function KPL($kms, $liters)
    {
        return ($kms / $liters);
    }

    public function myMethod()
    {
        return self::KPL(170, 10);
    }
}
// echo "</br>";
// $car = new Car();
// echo $car::KPL(200, 14);
// echo "</br>";
// echo Car::KPL(800, 29);
// echo "</br>";
// echo $car->myMethod();
// echo "</br>";


class Account
{
    private $balance = 0;
    public function push($amount)
    {
        $this->balance += $amount;
    }
    public function cash($amount)
    {
        if ($this->balance > $amount) {
            $this->balance -= $amount;
        } else {
            die("not enough balance");
        }
    }

    public function showBalance()
    {
        echo $this->balance . "</br>";
    }
}

// $myAccount = new Account();
// $myAccount->push(100);
// $myAccount->showBalance();
// $myAccount->cash(70);
// $myAccount->showBalance();
// $myAccount->cash(70);
// $myAccount->showBalance();
