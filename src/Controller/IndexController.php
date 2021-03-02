<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/hello-world/{name}", name="hello", methods={"GET"})
     */
    public function hello(string $name="world"): Response
    {
        /*return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);*/
        return new Response('<h1>Hello '. \ucfirst($name) . '</h1>');
    }

}
