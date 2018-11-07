<?php

namespace AppBundle\Twig;

class AccueilExtension extends \Twig_Extension{

    public function getFilters()
    {
        return array(new \Twig_SimpleFilter('concat',array($this,'concatString')));
    }

    public function concatString($str1,$str2){
       return $str1.$str2;
    }

    public function getName()
    {
        return 'accueil_extension';
    }
}