<?php

namespace Acme\ParqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\ParqueBundle\Entity\Especies
 *
 * @ORM\Table(name="Especies")
 * @ORM\Entity
 */
class Especies
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
     * @var text $nombrecomun
     *
     * @ORM\Column(name="NombreComun", type="text", nullable=false)
     */
    private $nombrecomun;

    /**
     * @var text $nombrecientifico
     *
     * @ORM\Column(name="NombreCientifico", type="text", nullable=false)
     */
    private $nombrecientifico;

    /**
     * @var text $descripcion
     *
     * @ORM\Column(name="Descripcion", type="text", nullable=false)
     */
    private $descripcion;

    /**
     * @var string $foto
     *
     * @ORM\Column(name="Foto", type="string", length=255, nullable=true)
     */
    private $foto;

    /**
     * @var Estadosconservacion
     *
     * @ORM\ManyToOne(targetEntity="Estadosconservacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EstadoConservacion", referencedColumnName="ID")
     * })
     */
    private $estadoconservacion;



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
     * Set nombrecomun
     *
     * @param text $nombrecomun
     */
    public function setNombrecomun($nombrecomun)
    {
        $this->nombrecomun = $nombrecomun;
    }

    /**
     * Get nombrecomun
     *
     * @return text 
     */
    public function getNombrecomun()
    {
        return $this->nombrecomun;
    }

    /**
     * Set nombrecientifico
     *
     * @param text $nombrecientifico
     */
    public function setNombrecientifico($nombrecientifico)
    {
        $this->nombrecientifico = $nombrecientifico;
    }

    /**
     * Get nombrecientifico
     *
     * @return text 
     */
    public function getNombrecientifico()
    {
        return $this->nombrecientifico;
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

    /**
     * Set foto
     *
     * @param string $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set estadoconservacion
     *
     * @param Acme\ParqueBundle\Entity\Estadosconservacion $estadoconservacion
     */
    public function setEstadoconservacion(\Acme\ParqueBundle\Entity\Estadosconservacion $estadoconservacion)
    {
        $this->estadoconservacion = $estadoconservacion;
    }

    /**
     * Get estadoconservacion
     *
     * @return Acme\ParqueBundle\Entity\Estadosconservacion 
     */
    public function getEstadoconservacion()
    {
        return $this->estadoconservacion;
    }
    public function __toString(){
    	return $this->nombrecomun;
    }
}