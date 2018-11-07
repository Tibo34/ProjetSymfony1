<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends Controller
{
    /**
     * @Route("/Annonces", name="Annonce")
     */
    public function annonceAction(Request $name)
    {
        $array=array('first'=>['id'=>1,'title'=>'titre annonce 1','description'=>'première annonce','prix'=>30],
        'second'=>['id'=>2,'title'=>'titre annonce 2','description'=>'deuxième annonce','prix'=>500]);
        $keys=array_keys($array['first']);
        return $this->render('annonce/annonce.html.twig',['keys'=>$keys,'annonces'=>$array]);
    }
}