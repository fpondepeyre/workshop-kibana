<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GrumpyChefController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(LoggerInterface $logger)
    {
        $logger->error('just a test for kibana', ['id' => uniqid()]);

        return $this->render('grumpy_chef/index.html.twig', [
            'controller_name' => 'GrumpyChefController',
        ]);
    }

    /**
     * @Route("/batch", name="batch")
     */
    public function batch(LoggerInterface $logger)
    {
        for($i = 0; $i < 1000; $i++) {
            if ($i % 2 === 0 || $i % 5 === 0 || $i % 7 === 0) {
                $logger->info('[GrumpyChefController] A {level} message', [
                    'index' => $i,
                    'level' => 'info',
                ]);
            }
            if ($i % 1 === 0 || $i % 8 === 0) {
                $logger->warning('[GrumpyChefController] A {level} message', [
                    'index' => $i,
                    'level' => 'info',
                ]);
            }
            if ($i % 4 === 0 || $i % 6 === 0) {
                $logger->error('[GrumpyChefController] A {level} message', [
                    'index' => $i,
                    'level' => 'info',
                ]);
            }
            if ($i % 9 === 0) {
                $logger->critical('[GrumpyChefController] A {level} message', [
                    'index' => $i,
                    'level' => 'info',
                ]);
            }
        }

        return $this->render('grumpy_chef/index.html.twig', [
            'controller_name' => 'GrumpyChefController',
        ]);
    }
}
