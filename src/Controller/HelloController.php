<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="app_hello")
     * @param MessageGenerator $messageGenerator
     * @return response 
     */

    public function hello(MessageGenerator $messageGenerator):Response
    {

        return $this->render('hello/index.html.twig', [
            'data' => $messageGenerator->helloMessage(),
        ]);

    }
}


