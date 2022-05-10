<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Workout
 *
 * @ORM\Table(name="workout")
 * @ORM\Entity
 */
class Workout
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_muscle", type="string", length=255, nullable=false)
     */
    private $nomMuscle;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_exercice", type="string", length=255, nullable=false)
     */
    private $nomExercice;


    /**
     * @var string
     * @ORM\Column(name="image_exercice", type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank(message="Ajouter une image jpg")
     */

    private $imageExercice;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_exercice", type="integer", nullable=false)
     */
    private $dureeExercice;

    /**
     * @var int
     *
     * @ORM\Column(name="state", type="integer", nullable=false)
     */
    private $state;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMuscle(): ?string
    {
        return $this->nomMuscle;
    }

    public function setNomMuscle(string $nomMuscle): self
    {
        $this->nomMuscle = $nomMuscle;

        return $this;
    }

    public function getNomExercice(): ?string
    {
        return $this->nomExercice;
    }

    public function setNomExercice(string $nomExercice): self
    {
        $this->nomExercice = $nomExercice;

        return $this;
    }

    public function getImageExercice()
    {
        return $this->imageExercice;
    }

    public function setImageExercice($imageExercice)
    {
        $this->imageExercice = $imageExercice;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDureeExercice(): ?int
    {
        return $this->dureeExercice;
    }

    public function setDureeExercice(int $dureeExercice): self
    {
        $this->dureeExercice = $dureeExercice;

        return $this;
    }

    public function getState(): ?int
    {
        return $this->state;
    }

    public function setState(int $state): self
    {
        $this->state = $state;

        return $this;
    }


}
