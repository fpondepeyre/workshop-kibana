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
    public function index(LoggerInterface $grumpyChefLogger)
    {
        $grumpyChefLogger->error('just a test for kibana', ['id' => uniqid()]);

        return $this->render('grumpy_chef/index.html.twig', [
            'controller_name' => 'GrumpyChefController',
        ]);
    }

    /**
     * @Route("/batch", name="batch")
     */
    public function batch(LoggerInterface $grumpyChefLogger)
    {
        for($i = 0; $i < 1000; $i++) {
            if ($i % 2 === 0 || $i % 5 === 0 || $i % 7 === 0) {
                $grumpyChefLogger->info('[GrumpyChefController] A {level} message', [
                    'index' => $i,
                    'level' => 'info',
                ]);
            }
            if ($i % 1 === 0 || $i % 8 === 0) {
                $grumpyChefLogger->warning('[GrumpyChefController] A {level} message', [
                    'index' => $i,
                    'level' => 'warning',
                ]);
            }
            if ($i % 4 === 0 || $i % 6 === 0) {
                $grumpyChefLogger->error('[GrumpyChefController] A {level} message', [
                    'index' => $i,
                    'level' => 'error',
                ]);
            }
            if ($i % 9 === 0) {
                $grumpyChefLogger->critical('[GrumpyChefController] A {level} message', [
                    'index' => $i,
                    'level' => 'critical',
                ]);
            }
        }

        return $this->render('grumpy_chef/index.html.twig', [
            'controller_name' => 'GrumpyChefController',
        ]);
    }
}
