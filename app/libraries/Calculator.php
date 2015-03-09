<?php

namespace App\Libraries;
/**
* Calculator Class
*/
class Calculator
{
    public function add($x, $y)
    {
        if (!is_int($x) or !is_int($y)) {
            throw new \InvalidArgumentException;
        }

        return $x + $y;
    }
}
