<?php

namespace App\Controller;

use App\Service\LogService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LaravelController extends AbstractController
{
    public function __construct(protected LogService $log){
    }
    public function show(): Response
    {
        $this->log->exibirLog();
        return $this->render('laravel/index.html.twig', [
            'controller_name' => 'LaravelController',
        ]);
    }

    public function encore(): Response
    {
        $this->log->exibirLog();
        return $this->render('encore/base.html.twig', [
            'controller_name' => 'LaravelController',
        ]);
    }
}
