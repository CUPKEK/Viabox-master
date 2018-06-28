<?php

namespace VB\OptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScanOption
 *
 * @ORM\Table(name="scan_option")
 * @ORM\Entity(repositoryClass="VB\OptionBundle\Repository\ScanOptionRepository")
 */
class ScanOption
{
    /**
     * @var string
     *
     * @ORM\Column(name="option_scan", type="string", length=20, nullable=false)
     */
    private $optionScan;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_scan", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixScan;

    /**
     * @var int
     *
     * @ORM\Column(name="id_scan", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idScan;



    /**
     * Set optionScan.
     *
     * @param string $optionScan
     *
     * @return ScanOption
     */
    public function setOptionScan($optionScan)
    {
        $this->optionScan = $optionScan;

        return $this;
    }

    /**
     * Get optionScan.
     *
     * @return string
     */
    public function getOptionScan()
    {
        return $this->optionScan;
    }

    /**
     * Set prixScan.
     *
     * @param float $prixScan
     *
     * @return ScanOption
     */
    public function setPrixScan($prixScan)
    {
        $this->prixScan = $prixScan;

        return $this;
    }

    /**
     * Get prixScan.
     *
     * @return float
     */
    public function getPrixScan()
    {
        return $this->prixScan;
    }


    /**
     * Set idScan.
     *
     * @param int $idScan
     *
     * @return ScanOption
     */
    public function setIdScan($idScan)
    {
        $this->idScan = $idScan;

        return $this;
    }


    /**
     * Get idScan.
     *
     * @return int
     */
    public function getIdScan()
    {
        return $this->idScan;
    }

    public function __toString() {
        return (string) $this->idScan;
    }

}
