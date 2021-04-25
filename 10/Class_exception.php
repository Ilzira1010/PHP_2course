<?php

use errors\Exception1;
use errors\Exception2;
use errors\Exception3;
use errors\Exception4;
use errors\Exception5;

class Class_exception
{

    private function ranExc($e)
    {
        $exc = rand(1, 5);
        if ($exc == 1) {
            throw new Exception1("Exception_1: " . $e);
        }
        if ($exc == 2) {
            throw new Exception2("Exception_2: " . $e);
        }
        if ($exc == 3) {
            throw new Exception3("Exception_3: " . $e);
        }
        if ($exc == 4) {
            throw  new Exception4("Exception_4: " . $e);
        }
        if ($exc == 5) {
            throw new Exception5("Exception_5: " . $e);
        }
    }

    public function method1()
    {
        $x = rand(-10, 10);
        if ($x <= 0) {
            $this->ranExc("Нельзя брать корень из отрицательного числа: " . $x . "\n");
        } else {
            $this->ranExc("Можно взять корень из этого числа: " . $x . "\n");

        }

    }

    public function method2()
    {
        $x = rand(0, 5);
        if ($x == 0) {
            $this->ranExc("<td><font color=red><b>Нельзя делить на 0!:" . $x . "\n</b></font></td>");
        } else {
            $this->ranExc("Если число делить на 1, получается само число:" . $x . "\n");
        }

    }

    public function method3()
    {
        $x = rand(4, 25);
        if ($x % 5 == 0) {
            $this->ranExc("Число кратное 5: " . $x . "\n");
        } else {
            $this->ranExc("Число не кратное 5: " . $x . "\n");
        }
    }

    public function method4()
    {
        $x = rand(1, 15);
        if ($x % 2 == 0) {
            $this->ranExc("Чётное число: " . $x . "\n");
        } else {
            $this->ranExc("Нечётное число: " . $x . "\n");
        }
    }
}