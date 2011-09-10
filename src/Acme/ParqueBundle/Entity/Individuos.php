<?php

namespace Acme\ParqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\ParqueBundle\Entity\Individuos
 *
 * @ORM\Table(name="Individuos")
 * @ORM\Entity
 */
class Individuos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var date $plantacion
     *
     * @ORM\Column(name="plantacion", type="date", nullable=false)
     */
    private $plantacion;

    /**
     * @var float $coordx
     *
     * @ORM\Column(name="coordx", type="float", nullable=false)
     */
    private $coordx;

    /**
     * @var float $coordy
     *
     * @ORM\Column(name="coordy", type="float", nullable=false)
     */
    private $coordy;

    /**
     * @var string $foto
     *
     * @ORM\Column(name="foto", type="string", length=255, nullable=true)
     */
    private $foto;

    /**
     * @var Especies
     *
     * @ORM\ManyToOne(targetEntity="Especies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="especie", referencedColumnName="ID")
     * })
     */
    private $especie;



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
     * Set plantacion
     *
     * @param date $plantacion
     */
    public function setPlantacion($plantacion)
    {
        $this->plantacion = $plantacion;
    }

    /**
     * Get plantacion
     *
     * @return date 
     */
    public function getPlantacion()
    {
        return $this->plantacion;
    }

    /**
     * Set coordx
     *
     * @param float $coordx
     */
    public function setCoordx($coordx)
    {
        $this->coordx = $coordx;
    }

    /**
     * Get coordx
     *
     * @return float 
     */
    public function getCoordx()
    {
        return $this->coordx;
    }

    /**
     * Set coordy
     *
     * @param float $coordy
     */
    public function setCoordy($coordy)
    {
        $this->coordy = $coordy;
    }

    /**
     * Get coordy
     *
     * @return float 
     */
    public function getCoordy()
    {
        return $this->coordy;
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
     * Set especie
     *
     * @param Acme\ParqueBundle\Entity\Especies $especie
     */
    public function setEspecie(\Acme\ParqueBundle\Entity\Especies $especie)
    {	
        $this->especie = $especie;
    }

    /**
     * Get especie
     *
     * @return Acme\ParqueBundle\Entity\Especies 
     */
    public function getEspecie()
    {
        return $this->especie;
    }
}