<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

interface transform
{
    public function stringTransform($string) :string ;
}

class CapitalizeController extends AbstractController
{
    /**
     * @Route("/capitalize", name="capitalize")
     */
    public function index()
    {
        return $this->render('capitalize/index.html.twig', [
            'controller_name' => 'CapitalizeController',
        ]);
    }
}
