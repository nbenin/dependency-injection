<?php
declare(strict_types=1);

namespace App\Entity;

interface transform
{
    public static function stringTransform($string) :string ;
}