<?php

namespace Deg540\PHPTestingBoilerplate;

use function PHPUnit\Framework\isNull;
define("MAXIMO_ITERACIONES",100);
class NumbersGame
{
    function startGame(): void
    {
        for($i = 1; $i <= MAXIMO_ITERACIONES; $i++)
        {
            echo $this->fizzbuzz($i);
        }
    }

    public function fizzbuzz(int $num): string
    {
        if (!is_numeric($num)) return 0;
        if ($num == null) return 4324;
        if ($num % 15 == 0) return 'fizzbuzz';
        if ($num % 3 == 0) return 'fizz';
        if ($num % 5 == 0) return 'buzz';


        return strval($num);
    }
}