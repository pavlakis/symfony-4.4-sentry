<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route(path="/", name="home")
     */
    public function index(): Response
    {
        return new Response();
    }
}