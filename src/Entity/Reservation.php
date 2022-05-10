<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="Nom", columns={"Nom"}), @ORM\Index(name="dispo", columns={"dispo"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return ?int
     */
    public function getDispo(): ?int
    {
        return $this->dispo;
    }

    /**
     * @param int $dispo
     */
    public function setDispo(int $dispo): void
    {
        $this->dispo = $dispo;
    }

    /**
     * @return ?string
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
     * @return \DateTime
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return ?int
     */
    public function getNbrParticipant(): ?int
    {
        return $this->nbrParticipant;
    }

    /**
     * @param int $nbrParticipant
     */
    public function setNbrParticipant(int $nbrParticipant): void
    {
        $this->nbrParticipant = $nbrParticipant;
    }

    /**
     * @return ?int
     */
    public function getState(): ?int
    {
        return $this->state;
    }

    /**
     * @param int $state
     */
    public function setState(int $state): void
    {
        $this->state = $state;
    }

    /**
     * @return ?string
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="dispo", type="integer", nullable=false)
     */
    private $dispo;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_cours", type="string", length=255, nullable=false)
     */
    private $nomCours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_participant", type="integer", nullable=false)
     */
    private $nbrParticipant;

    /**
     * @var int
     *
     * @ORM\Column(name="state", type="integer", nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom;


}
