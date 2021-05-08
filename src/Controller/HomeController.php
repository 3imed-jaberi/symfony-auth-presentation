<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/admin", name="homepage")
     */
    public function index(): Response
    {
        // @IsGranted("ROLE_ADMIN")
        // $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('home/home.html.twig');
    }
}