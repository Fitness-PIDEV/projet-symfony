<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
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
     * @ORM\Column(name="num", type="integer", nullable=false)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=250, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=250, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=250, nullable=false)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=250, nullable=false)
     */
    private $image;

    /**
     * @var bool
     *
     * @ORM\Column(name="isDeleted", type="boolean", nullable=false)
     */
    private $isdeleted;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=250, nullable=false)
     */
    private $role;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="dispo", type="boolean", nullable=true)
     */
    private $dispo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="certificatURL", type="string", length=250, nullable=true)
     */
    private $certificaturl;


}
