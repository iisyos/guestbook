<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HogeController extends AbstractController
{
    #[Route('/hoge', name: 'app_hoge')]
    public function index(): Response
    {
        return $this->render('hoge/index.html.twig', [
            'controller_name' => 'HogeController',
        ]);
    }
}
