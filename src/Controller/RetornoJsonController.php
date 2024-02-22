<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RetornoJsonController extends AbstractController
{
    #[Route('/retorno/json', name: 'app_retorno_json', methods: ['GET'])]
    public function index(): Response
    {
        $data = [
            ["nome" => "Carlos", "Idade" => "25 anos"],
            ["nome" => "Carlos", "Idade" => "25 anos"]
        ];
    
        return new JsonResponse($data);        
        
    }

    #[Route('retorno/request/{idade}', name: 'app_retorno_request', methods: ['GET'])]
    public function request(int $idade = null ){
        
        $data =[
            ["nome1" => "Carlos", "idade" => $idade + 1],
            ["nome2" => "Amanda", "idade" => $idade + 2],
            ["nome3" => "Rafael", "idade" => $idade + 3]
        ];
        return new JsonResponse($data);

    } 
}
