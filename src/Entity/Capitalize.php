<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CapitalizeRepository")
 */
class Capitalize implements transform
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function stringTransform($string): string
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
