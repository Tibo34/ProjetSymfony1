<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Annonce;
use AppBundle\Form\AnnonceType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Repository\AnnonceRepository;


class AnnonceController extends Controller
{
    /**
     * @Route("/Annonces", name="Annonce")
     */
    public function annoncesAction(Request $name)
    {
        $repo=$this->getDoctrine()->getRepository('AppBundle:Annonce');
        $annonces=$repo->findAll();        
       $keys=['id','nom','description','prix(Euro)','prix(Franc)','mail','departement'];
       $nbAnnonces=$repo->getNbAnnonces();        
        return $this->render('annonce/annonces.html.twig',['keys'=>$keys,'annonces'=>$annonces,'nbAnnonce'=>$nbAnnonces]);
    }

   

    /**
     * @Route("/Annonces/{id}", name="Annonce_id")
     */
    public function getAnnonceAction($id){
        $annonce=$this->getDoctrine()->getRepository('AppBundle:Annonce')->find($id);
                                   
        return $this->render('annonce/annonce.html.twig',['annonce'=>$annonce]);
    }

    /**
     * @Route("/ajouter")   
     */
    public function ajouterAnnonceAction(Request $request){
        $annonce=new Annonce();
        $repo=$this->getDoctrine()->getRepository('AppBundle:Annonce');           
        $form=$this->createForm(AnnonceType::class,$annonce);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getEntityManager();
            $em->persist($annonce);
            $em->flush();
            $this->addFlash('operation','Opération éffectué');              
            return $this->redirect($this->generateUrl('annonce_success'));
        }                      
        return $this->render("annonce/new.html.twig",array('form' => $form->createView()));
    }  

     /**
     * @Route("/", name="annonce_success")
     */
    public function ajoutSuccessAction(Request $name){        
        return $this->render('accueil/accueil.html.twig',['success'=>'Opération éffectué']);        
    }
   

}