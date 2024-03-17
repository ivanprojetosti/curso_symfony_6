<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HttpService{

    public function __construct(private LoggerInterface $logger, private HttpClientInterface $http){
    }

    public function get(string $url){

        $consulta = $this->http->request('GET', $url );
        $resultado = $consulta->toArray();
        return $resultado;

    }

    public function post(){

    }

    public function put(){

    }

    public function patch(){

    }
    
    public function delete(){

    }

}