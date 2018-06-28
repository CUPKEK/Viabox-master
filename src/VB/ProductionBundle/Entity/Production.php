<?php

namespace VB\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Production
 *
 * @ORM\Table(name="production", indexes={@ORM\Index(name="Production_Customer0_FK", columns={"id_customer"}), @ORM\Index(name="Production_Shipper_Address1_FK", columns={"id_shipper_address"})})
 * @ORM\Entity(repositoryClass="VB\ProductionBundle\Repository\ProductionRepository")
 */
class Production
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_receipt", type="date", nullable=false)
     */
    private $dateReceipt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_processing", type="date", nullable=false)
     */
    private $dateProcessing;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=20, nullable=false)
     */
    private $format;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float", precision=10, scale=0, nullable=true)
     */
    private $poids;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_pages", type="integer", nullable=false)
     */
    private $nbPages;

    /**
     * @var string
     *
     * @ORM\Column(name="option_scan", type="string", length=20, nullable=true)
     */
    private $optionScan;

    /**
     * @var string
     *
     * @ORM\Column(name="option_mail", type="string", length=20, nullable=true)
     */
    private $optionMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="option_delete", type="string", length=20, nullable=true)
     */
    private $optionDelete;

    /**
     * @var int
     *
     * @ORM\Column(name="id_production", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduction;

    /**
     * @var \VB\CustomerBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="VB\CustomerBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_customer", referencedColumnName="id_customer")
     * })
     */
    private $idCustomer;

    /**
     * @var \VB\ProductionBundle\Entity\ShipperAddress
     *
     * @ORM\ManyToOne(targetEntity="VB\ProductionBundle\Entity\ShipperAddress")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_shipper_address", referencedColumnName="id_shipper_address")
     * })
     */
    private $idShipperAddress;



    /**
     * Set dateReceipt.
     *
     * @param \DateTime $dateReceipt
     *
     * @return Production
     */
    public function setDateReceipt($dateReceipt)
    {
        $this->dateReceipt = $dateReceipt;

        return $this;
    }

    /**
     * Get dateReceipt.
     *
     * @return \DateTime
     */
    public function getDateReceipt()
    {
        return $this->dateReceipt;
    }

    /**
     * Set dateProcessing.
     *
     * @param \DateTime $dateProcessing
     *
     * @return Production
     */
    public function setDateProcessing($dateProcessing)
    {
        $this->dateProcessing = $dateProcessing;

        return $this;
    }

    /**
     * Get dateProcessing.
     *
     * @return \DateTime
     */
    public function getDateProcessing()
    {
        return $this->dateProcessing;
    }

    /**
     * Set format.
     *
     * @param string $format
     *
     * @return Production
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format.
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set poids.
     *
     * @param float|null $poids
     *
     * @return Production
     */
    public function setPoids($poids = null)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids.
     *
     * @return float|null
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set nbPages.
     *
     * @param int $nbPages
     *
     * @return Production
     */
    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }

    /**
     * Get nbPages.
     *
     * @return int
     */
    public function getNbPages()
    {
        return $this->nbPages;
    }

    /**
     * Set optionScan.
     *
     * @param string|null $optionScan
     *
     * @return Production
     */
    public function setOptionScan($optionScan =null)
    {
        $this->optionScan = $optionScan;

        return $this;
    }

    /**
     * Get optionScan.
     *
     * @return string|null
     */
    public function getOptionScan()
    {
        return $this->optionScan;
    }

    /**
     * Set optionMail.
     *
     * @param string|null $optionMail
     *
     * @return Production
     */
    public function setOptionMail($optionMail = null)
    {
        $this->optionMail = $optionMail;

        return $this;
    }

    /**
     * Get optionMail.
     *
     * @return string|null
     */
    public function getOptionMail()
    {
        return $this->optionMail;
    }

    /**
     * Set optionDelete.
     *
     * @param string|null $optionDelete
     *
     * @return Production
     */
    public function setOptionDelete($optionDelete =null )
    {
        $this->optionDelete = $optionDelete;

        return $this;
    }

    /**
     * Get optionDelete.
     *
     * @return string|null
     */
    public function getOptionDelete()
    {
        return $this->optionDelete;
    }


    /**
     * Set idProduction.
     *
     * @param int $idProduction
     *
     * @return Production
     */
    public function setIdProduction($idProduction)
    {
        $this->idProduction = $idProduction;

        return $this;
    }

    /**
     * Get idProduction.
     *
     * @return int
     */
    public function getIdProduction()
    {
        return $this->idProduction;
    }

    /**
     * Set idCustomer.
     *
     * @param \VB\CustomerBundle\Entity\Customer|null $idCustomer
     *
     * @return Production
     */
    public function setIdCustomer(\VB\CustomerBundle\Entity\Customer $idCustomer = null)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer.
     *
     * @return \VB\CustomerBundle\Entity\Customer|null
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set idShipperAddress.
     *
     * @param \VB\ProductionBundle\Entity\ShipperAddress|null $idShipperAddress
     *
     * @return Production
     */
    public function setIdShipperAddress(\VB\ProductionBundle\Entity\ShipperAddress $idShipperAddress = null)
    {
        $this->idShipperAddress = $idShipperAddress;

        return $this;
    }

    /**
     * Get idShipperAddress.
     *
     * @return \VB\ProductionBundle\Entity\ShipperAddress|null
     */
    public function getIdShipperAddress()
    {
        return $this->idShipperAddress;
    }

    public function __toString() {
        return (string) $this->idProduction;
    }

}
