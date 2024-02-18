<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RelatorioCobrancaController extends AbstractController
{
    #[Route('/cobranca', name: 'cobranca')]
    
    public function gerarRelatorioDevedores(): Response
    {

        $listaClientesDevedores = [
        
             ["nome" => "Leandro", "numeroBoleto" => "444441", "vencimentoBoleto" => "01/01/2024"],
             ["nome" => "Amanda", "numeroBoleto" => "444442", "vencimentoBoleto" => "01/01/2024"],
             ["nome" => "Leonardo", "numeroBoleto" => "444443", "vencimentoBoleto" => "01/01/2024"] 
        
        ];

        return $this->render('email/conteudo_cobranca_email.html.twig', [
            'lista' => $listaClientesDevedores
        ]);
    }

  
}
