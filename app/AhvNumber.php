<?php

namespace App;

class AhvNumber
{
    public static function isValid($s)
    {
        $pattern = "/756\.[0-9]{4}\.[0-9]{4}\.[0-9]{2}/";
        preg_match($pattern, $s, $matches);
        $isValid = $matches && sizeOf($matches) == 1;
        return $isValid;
    }
}
