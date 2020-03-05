<?php
declare(strict_types=1);

namespace App\Entity;

class Dash implements transform
{
    public function stringTransform($string): string
    {
        return str_replace(' ', '-', $string);
    }
}