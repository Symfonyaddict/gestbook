<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ConferenceController extends AbstractController
{
    #[Route('/',  name: 'homepage')]
    public function index(Request $req): Response
    {
        return $this->render('conference/index.html.twig');

    }
}
