<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\Dash;
use App\Entity\MonoLogger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CapitalizeController extends AbstractController
{
    /**
     * @Route("/capitalize", name="capitalize")
     */
    public function index()
    {
        $capitalize = new Capitalize();
        $dash = new Dash();
        $logger = new MonoLogger('logger');

        $stringToCapitalize = $capitalize->stringTransform('what is up');
        $stringToDash = $dash->stringTransform('what is up');
        $logger->log($stringToDash);

        return $this->render('capitalize/index.html.twig', [
            'stringToCaps' => $stringToCapitalize, 'stringToDash' => $stringToDash,
        ]);
    }
}
