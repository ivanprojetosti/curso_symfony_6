<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LogService extends AbstractController{

    public function __construct(protected LoggerInterface $logger){
    }

    public function exibirLog(){
        $this->logger->info('Adicionado Log');
    }

}