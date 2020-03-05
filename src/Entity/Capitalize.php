<?php

namespace App\Entity;

class Capitalize implements transform
{
    public static function stringTransform($string): string
    {
        $string = strtolower($string);

        for ($i = 0; $i < strlen($string); $i++) {
            if ($i % 2 == 0) {
                $string{$i} = strtoupper($string{$i});
                continue;
            } else {
                continue;
            }
        }
        return $string;
    }
}
