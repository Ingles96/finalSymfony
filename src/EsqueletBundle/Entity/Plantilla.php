<?php

namespace EsqueletBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plantilla
 *
 * @ORM\Table(name="plantilla")
 * @ORM\Entity(repositoryClass="EsqueletBundle\Repository\PlantillaRepository")
 */
class Plantilla
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="Carlet", mappedBy="plantilla")
     */
    private $carlet;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Plantilla
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->carlet = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add carlet
     *
     * @param \EsqueletBundle\Entity\Carlet $carlet
     *
     * @return Plantilla
     */
    public function addCarlet(\EsqueletBundle\Entity\Carlet $carlet)
    {
        $this->carlet[] = $carlet;

        return $this;
    }

    /**
     * Remove carlet
     *
     * @param \EsqueletBundle\Entity\Carlet $carlet
     */
    public function removeCarlet(\EsqueletBundle\Entity\Carlet $carlet)
    {
        $this->carlet->removeElement($carlet);
    }

    /**
     * Get carlet
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCarlet()
    {
        return $this->carlet;
    }
}
