<?php

namespace Esprit\NaoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcours;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="URl", type="string", length=250, nullable=false)
     */
    private $url;
    public function getIdcours() {
        return $this->idcours;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getUrl() {
        return $this->url;
    }
    public function setIdcours($idcours) {
        $this->idcours = $idcours;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setUrl($url) {
        $this->url = $url;
    }




}
