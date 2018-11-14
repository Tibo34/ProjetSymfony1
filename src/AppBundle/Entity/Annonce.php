<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnnonceRepository")
 */
class Annonce
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
     *
     * @ORM\Column(name="nom", type="string", length=30)
     * @Assert\Length(
     *              max=30,
     *              maxMessage="Votre nom est trop long limite : {{limit}}."
     *              )
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\Length(
     *          max=500,
     *          maxMessage="La description est trop longue limite :  {{limit}}.")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     * @Assert\Range(
     *          min=0,
     *      minMessage="Le prix minimum est de {{limit}}.")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100)
     * @Assert\Email(
     *      message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true)
     */
    private $mail;  

    /**
     * @var int
     * 
     * @ORM\ManyToOne(targetEntity="Departement",inersedBy="id")
     * @ORM\JoinColumn(name="departement_id",type="integer",length=100)
     * @Assert\Length(
     *          maxMessage="le champ département est trop grand",
     *          max=100)     
     */
    private $departement;

    /**
     * Get departement
     * 
     * @return int
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set departement
     * 
     * @param int $num
     * 
     * @return Annonce
     */
    public function setDepartement($num)
    {
        $this->departement=$num;

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

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Annonce
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Annonce
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

   
}
