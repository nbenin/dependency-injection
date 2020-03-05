<?php
declare(strict_types=1);

namespace App\Entity;


class DoNothin implements transform
{

    public static function stringTransform($string): string
    {
        return 'Enter some Text';
    }
}