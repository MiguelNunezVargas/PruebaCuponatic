<?php

namespace CNC\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="productos")
 * @ORM\Entity(repositoryClass="CNC\ProductBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="producto_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="text")
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_termino", type="datetime")
     */
    private $fechaTermino;

    /**
     * @var int
     *
     * @ORM\Column(name="precio", type="integer")
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="text", nullable=true)
     */
    private $imagen;

    /**
     * @var int
     *
     * @ORM\Column(name="vendidos", type="integer", nullable=true)
     */
    private $vendidos;

    /**
     * @var int
     *
     * @ORM\Column(name="tags", type="integer", nullable=true)
     */
    private $tags;


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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Product
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Product
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Product
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaTermino
     *
     * @param \DateTime $fechaTermino
     *
     * @return Product
     */
    public function setFechaTermino($fechaTermino)
    {
        $this->fechaTermino = $fechaTermino;

        return $this;
    }

    /**
     * Get fechaTermino
     *
     * @return \DateTime
     */
    public function getFechaTermino()
    {
        return $this->fechaTermino;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     *
     * @return Product
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return int
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Product
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set vendidos
     *
     * @param integer $vendidos
     *
     * @return Product
     */
    public function setVendidos($vendidos)
    {
        $this->vendidos = $vendidos;

        return $this;
    }

    /**
     * Get vendidos
     *
     * @return int
     */
    public function getVendidos()
    {
        return $this->vendidos;
    }

    /**
     * Set tags
     *
     * @param integer $tags
     *
     * @return Product
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return int
     */
    public function getTags()
    {
        return $this->tags;
    }
}

