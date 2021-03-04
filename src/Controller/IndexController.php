<?php

namespace App\Controller;

use App\Event\HelloEvent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * CHAP01
     * @Route("/hello-world/{name}", name="hello", methods={"GET"})
     */
    /*
    public function hello(string $name="world"): Response
    {
        return new Response('<h1>Hello '. \ucfirst($name) . '</h1>');
    }
    */

    /**
     * CHAP02
     * @Route("/hello-world/{name}", name="hello", methods={"GET"})
     */
    public function hello(EventDispatcherInterface $theEventDispatcher, string $name="world" ): Response
    {
        //$httpResponse = new Response('<h1>Hello '. \ucfirst($name) . '</h1>');
        $httpResponse = $this->render('index/index.html.twig', ['visitor_name' => \ucfirst($name),]);
        $theEvent = new HelloEvent( $httpResponse, $name );
        $theEventDispatcher->dispatch($theEvent, HelloEvent::NAME);
        return $httpResponse;
    }
}
