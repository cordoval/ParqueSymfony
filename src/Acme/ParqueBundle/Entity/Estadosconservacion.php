<?php

namespace Acme\ParqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\ParqueBundle\Entity\Estadosconservacion
 *
 * @ORM\Table(name="EstadosConservacion")
 * @ORM\Entity
 */
class Estadosconservacion
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var text $sigla
     *
     * @ORM\Column(name="Sigla", type="text", nullable=false)
     */
    private $sigla;

    /**
     * @var text $nombre
     *
     * @ORM\Column(name="Nombre", type="text", nullable=false)
     */
    private $nombre;

    /**
     * @var text $descripcion
     *
     * @ORM\Column(name="Descripcion", type="text", nullable=false)
     */
    private $descripcion;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sigla
     *
     * @param text $sigla
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;
    }

    /**
     * Get sigla
     *
     * @return text 
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set nombre
     *
     * @param text $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return text 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param text $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return text 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}