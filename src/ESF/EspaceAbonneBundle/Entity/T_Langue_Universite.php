<?php

namespace ESF\EspaceAbonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Langue_Universite
 *
 * @ORM\Table(name="t__langue__universite")
 * @ORM\Entity(repositoryClass="ESF\EspaceAbonneBundle\Repository\T_Langue_UniversiteRepository")
 */
class T_Langue_Universite
{

    /**
   * @ORM\ManyToOne(targetEntity="ESF\EspaceAbonneBundle\Entity\T_Formation_Universite", inversedBy="langues")
   * @ORM\JoinColumn(nullable=false)
   */
    private $formation;

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
     * @ORM\Column(name="langue", type="string", length=255)
     */
    private $langue;

    public function __toString()
    {
        return $this->getLangue();
    }
    
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
     * Set langue
     *
     * @param string $langue
     *
     * @return T_Langue_Universite
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set formation
     *
     * @param \ESF\EspaceAbonneBundle\Entity\T_Formation_Universite $formation
     *
     * @return T_Langue_Universite
     */
    public function setFormation(\ESF\EspaceAbonneBundle\Entity\T_Formation_Universite $formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \ESF\EspaceAbonneBundle\Entity\T_Formation_Universite
     */
    public function getFormation()
    {
        return $this->formation;
    }
}
