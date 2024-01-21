<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EPortfolioController extends AbstractController
{
    #[Route('/', name: 'app_e_portfolio')]
    public function index(): Response
    {
        return $this->render('e_portfolio/index.html.twig', [
            'controller_name' => 'EPortfolioController',
        ]);
    }
    #[Route('/infos', name: 'app_infos')]
    public function infos(): Response
    {
        return $this->render('e_portfolio/apropos.html.twig', [
            'controller_name' => 'EPortfolioController',
        ]);
    }
    #[Route('/CV', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('e_portfolio/CV.html.twig', [
            'controller_name' => 'EPortfolioController',
        ]);
    }
    #[Route('/RT1', name: 'app_rt1')]
    public function rt1(): Response
    {
        return $this->render('e_portfolio/RT1.html.twig', [
            'controller_name' => 'EPortfolioController',
        ]);
    }
    #[Route('/RT2', name: 'app_rt2')]
    public function rt2(): Response
    {
        return $this->render('e_portfolio/RT2.html.twig', [
            'controller_name' => 'EPortfolioController',
        ]);
    }
    #[Route('/RT3', name: 'app_rt3')]
    public function RT3(): Response
    {
        return $this->render('e_portfolio/RT3.html.twig', [
            'controller_name' => 'EPortfolioController',
        ]);
    }
    #[Route('/formulaire', name: 'app_formulaire')]
    public function formulaire(): Response
    {
        return $this->render('e_portfolio/formulaire.html.twig', [
            'controller_name' => 'EPortfolioController',
        ]);
    }

}
