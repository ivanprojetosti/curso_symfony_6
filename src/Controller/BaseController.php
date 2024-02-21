<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController{

#[Route('/teste')] 
public function teste(): Response{

    $data =  [
        ["titulo" => "Salinha1", "descricao" => "Tudo que foi escrito2"],
        ["titulo" => "Salinha2", "descricao" => "Tudo que foi escrito4"],
        ["titulo" => "Salinha3", "descricao" => "Tudo que foi escrito5"],
        ["titulo" => "Salinha4", "descricao" => "Tudo que foi escrito6"]
    ];

    $info = $this->render('template.html.twig', [
        "data" => $data
    ]); 


    return $info;

}

#[Route('extend', name:"extend")]
public function extend(){

    $atual = "atual";
    $antigo = "antigo";

    return $this->render('base.html.twig', [
        "antigo" => $antigo,
        "atual"=> $atual
    ]);

}

#[Route('noticia', name: "noticia")]
public function noticia(){

    return $this->render('noticia.html.twig', [

    ]);
}

#[Route('bootstrap', name: "bootstrap")]
public function bootstrap(){
    return $this->render('bootstrap.html.twig',[]);
}

    
    


}



