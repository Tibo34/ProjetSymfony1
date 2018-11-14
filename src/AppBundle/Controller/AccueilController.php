<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Annonce;
use AppBundle\Repository\AnnonceRepository;
use AppBundle\Form\AnnonceType;
class AccueilController extends Controller
{

   
    /**
     * @Route("/", name="Accueil")
     */
    public function accueilAction(Request $name)
    {
        $repo=$this->getDoctrine()->getRepository('AppBundle:Annonce');
        $annonce=$repo->RandomAnnonce();
       
        return $this->render('accueil/accueil.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,'annonce'=>$annonce
        ]);
    }

     
}