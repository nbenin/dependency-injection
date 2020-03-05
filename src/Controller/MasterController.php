<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\Dash;
use App\Entity\DoNothin;
use App\Entity\Master;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MasterController extends AbstractController
{
    /**
     * @Route("/", name="master")
     * @param LoggerInterface $logger
     * @return Response
     */
    public function index(LoggerInterface $logger) {

         if (!isset($_POST['submit']))
         {
             $master = new Master(new DoNothin());
         }
         else if ($_POST['submit'] == 'capitalize')
         {
             $master = new Master(new Capitalize());
         }
         else if ($_POST['submit'] == 'dash')
         {
            $master = new Master(new Dash());
         }

         $logger->log(100, $master->transform($_POST['userInput'] ?? ''));

         return $this->render('master/index.html.twig', [
             'transformedString' => $master->transform($_POST['userInput'] ?? ''),
         ]);
    }
}
