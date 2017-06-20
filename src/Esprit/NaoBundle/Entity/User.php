<?php

namespace Esprit\NaoBundle\Entity;

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
     * @var integer
     *
     * @ORM\Column(name="IdUSer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=250, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Login", type="string", length=250, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="MotDePasse", type="string", length=250, nullable=false)
     */
    private $motdepasse;


}
