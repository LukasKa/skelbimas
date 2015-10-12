<?php

namespace Skelbimas\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="skelbimo_lentele")
 * @ORM\Entity(repositoryClass="Skelbimas\EventBundle\Entity\EventRepository")
 */
class Event
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="marke", type="string", length=255)
     */
    private $marke;

    /**
     * @var string
     *
     * @ORM\Column(name="modelis", type="string", length=255)
     */
    private $modelis;

    /**
     * @var string
     *
     * @ORM\Column(name="komentaras", type="text")
     */
    private $komentaras;


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
     * Set marke
     *
     * @param string $marke
     *
     * @return Event
     */
    public function setMarke($marke)
    {
        $this->marke = $marke;

        return $this;
    }

    /**
     * Get marke
     *
     * @return string
     */
    public function getMarke()
    {
        return $this->marke;
    }

    /**
     * Set modelis
     *
     * @param string $modelis
     *
     * @return Event
     */
    public function setModelis($modelis)
    {
        $this->modelis = $modelis;

        return $this;
    }

    /**
     * Get modelis
     *
     * @return string
     */
    public function getModelis()
    {
        return $this->modelis;
    }

    /**
     * Set komentaras
     *
     * @param string $komentaras
     *
     * @return Event
     */
    public function setKomentaras($komentaras)
    {
        $this->komentaras = $komentaras;

        return $this;
    }

    /**
     * Get komentaras
     *
     * @return string
     */
    public function getKomentaras()
    {
        return $this->komentaras;
    }
}

