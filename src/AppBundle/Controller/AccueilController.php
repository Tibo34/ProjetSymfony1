<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends Controller
{
    /**
     * @Route("/", name="Accueil")
     */
    public function accueilAction(Request $name)
    {
        //
        return $this->render('accueil/accueil.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,'chaine1'=>'hello je suis ','chaine2'=>' malade!!'
        ]);
    }
}