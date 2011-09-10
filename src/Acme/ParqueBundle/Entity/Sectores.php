<?php

namespace Acme\ParqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\ParqueBundle\Entity\Sectores
 *
 * @ORM\Table(name="Sectores")
 * @ORM\Entity
 */
class Sectores
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
     * @var text $comentario
     *
     * @ORM\Column(name="Comentario", type="text", nullable=false)
     */
    private $comentario;

    /**
     * @var integer $xplus
     *
     * @ORM\Column(name="xplus", type="integer", nullable=false)
     */
    private $xplus;

    /**
     * @var integer $xminus
     *
     * @ORM\Column(name="xminus", type="integer", nullable=false)
     */
    private $xminus;

    /**
     * @var integer $yplus
     *
     * @ORM\Column(name="yplus", type="integer", nullable=false)
     */
    private $yplus;

    /**
     * @var integer $yminus
     *
     * @ORM\Column(name="yminus", type="integer", nullable=false)
     */
    private $yminus;



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
     * Set comentario
     *
     * @param text $comentario
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
    }

    /**
     * Get comentario
     *
     * @return text 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set xplus
     *
     * @param integer $xplus
     */
    public function setXplus($xplus)
    {
        $this->xplus = $xplus;
    }

    /**
     * Get xplus
     *
     * @return integer 
     */
    public function getXplus()
    {
        return $this->xplus;
    }

    /**
     * Set xminus
     *
     * @param integer $xminus
     */
    public function setXminus($xminus)
    {
        $this->xminus = $xminus;
    }

    /**
     * Get xminus
     *
     * @return integer 
     */
    public function getXminus()
    {
        return $this->xminus;
    }

    /**
     * Set yplus
     *
     * @param integer $yplus
     */
    public function setYplus($yplus)
    {
        $this->yplus = $yplus;
    }

    /**
     * Get yplus
     *
     * @return integer 
     */
    public function getYplus()
    {
        return $this->yplus;
    }

    /**
     * Set yminus
     *
     * @param integer $yminus
     */
    public function setYminus($yminus)
    {
        $this->yminus = $yminus;
    }

    /**
     * Get yminus
     *
     * @return integer 
     */
    public function getYminus()
    {
        return $this->yminus;
    }
}