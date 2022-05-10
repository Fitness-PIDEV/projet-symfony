<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity
 */
class Cours
{
    /**
     *
     *
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_cours", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="le nom du cours est necessaire")
     */
    private $nomCours;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_cours", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="il faut preciser la duree du cours")
     */
    private $dureeCours;

    /**
     * @var string
     *
     * @ORM\Column(name="salle", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="il faut preciser la salle")
     */
    private $salle;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_coach", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="le nom du coach est necessaire")
     */
    private $nomCoach;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNomCours(): ?string
    {
        return $this->nomCours;
    }

    /**
     * @param string $nomCours
     */
    public function setNomCours(string $nomCours): void
    {
        $this->nomCours = $nomCours;
    }

    /**
     * @return string
     */
    public function getDureeCours(): ?string
    {
        return $this->dureeCours;
    }

    /**
     * @param string $dureeCours
     */
    public function setDureeCours(string $dureeCours): void
    {
        $this->dureeCours = $dureeCours;
    }

    /**
     * @return string
     */
    public function getSalle(): ?string
    {
        return $this->salle;
    }

    /**
     * @param string $salle
     */
    public function setSalle(string $salle): void
    {
        $this->salle = $salle;
    }

    /**
     * @return string
     */
    public function getNomCoach(): ?string
    {
        return $this->nomCoach;
    }

    /**
     * @param string $nomCoach
     */
    public function setNomCoach(string $nomCoach): void
    {
        $this->nomCoach = $nomCoach;
    }

    /**
     * @return int
     */
    public function getEtat(): ?int
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     */
    public function setEtat(int $etat): void
    {
        $this->etat = $etat;
    }


}
