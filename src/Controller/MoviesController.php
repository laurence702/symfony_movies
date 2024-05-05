<?php

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'movies')]
    public function index() 
    {
        $movies = ['Avengers: Endgame', 'Inception', 'snow piercer'];

        return $this->render('index.html.twig', array(
            'movies' => $movies,
        ));
    }

}
