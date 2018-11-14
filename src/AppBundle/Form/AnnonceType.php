<?php
// src/AppBundle/From/AnnpnceType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AnnonceType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('description');
        $builder->add('prix');
        $builder->add('mail');
        $builder->add("departement");
        $builder->add('ajouter',SubmitType::class);
    }

    public function getName(){
        return 'Annonce';
    }
}
