<?php

namespace App\Controller;

use App\Service\HttpService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class NoticiaController extends AbstractController
{
    public function __construct(private HttpService $http){

    }
    
    #[Route('/noticias', name: 'app_noticia')]
    public function index(): Response
    {
        $this->buscarNoticias();
        return $this->render('noticia/index.html.twig', [
            'controller_name' => 'NoticiaController',
        ]);
    }


    public function buscarNoticias(){

        $url = 'https://raw.githubusercontent.com/JonasPoli/array-news/main/arrayNews.json';
        $response = $this->http->get($url);
        return $response;
        
    }
}
