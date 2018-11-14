<?php

namespace AppBundle\Twig;


class AnnonceExtension extends \Twig_Extension{

    public function getFilters()
    {
        return array(new \Twig_SimpleFilter('prix',array($this,'prixFilter')),
            new \Twig_SimpleFilter('franc',array($this,'prixFranc')));
    }

    public function prixFilter($prix){
        if($prix<50){
            return 'green;';
        }
        else{
            return 'blue';
        }
    }

    public function prixFranc($prix){
        return $prix*6.56;
    }

    public function getName()
    {
        return 'annonce_extension';
    }
}