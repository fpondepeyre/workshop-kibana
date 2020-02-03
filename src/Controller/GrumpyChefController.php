<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GrumpyChefController extends AbstractController
{
    /**
     * @Route("/grumpy/chef", name="grumpy_chef")
     */
    public function index(LoggerInterface $logger)
    {
        $logger->error('just a test for kibana', ['id' => uniqid()]);

        return $this->render('grumpy_chef/index.html.twig', [
            'controller_name' => 'GrumpyChefController',
        ]);
    }
}
