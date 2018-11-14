<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DepartementRepository")
 */
class Departement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="nom",type="string")
     */
    private $nom;

    /**
     * Get nom
     * 
     * @return string
     */
    public function getNom(){
        return $this->nom;
    }

    /**
     * set Nom
     * @param string $nom
     * 
     * @return Departement
     */
    public function setNom($nom){
        $this->nom=$nom;
        return $this;
    }

     /**
     * set Id
     * 
     * @param int $num
     * 
     * @return Departement
     */
    public function setId($num){
        $this->id=$num;
        return $this;
    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

