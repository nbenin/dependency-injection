<?php
declare(strict_types=1);

namespace App\Entity;

class Master {

    /** @var transform
     *
     */
    private $transformType;

    /**
     * Master constructor.
     * @param transform $transformType
     */
    public function __construct(transform $transformType)
    {
        $this->transformType = $transformType;
    }

    public function transform($userInput) : string
    {
        return $this->transformType->stringTransform($userInput);
    }
}

