<?php

namespace VB\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat", indexes={@ORM\Index(name="Contrat_Customer_Option0_FK", columns={"id_customer_option"})})
 * @ORM\Entity(repositoryClass="VB\CustomerBundle\Repository\ContratRepository")
 */
class Contrat
{

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date_contrat", type="date", nullable=false)
     */
    private $startDateContrat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date_contrat", type="date", nullable=false)
     */
    private $endDateContrat;

    /**
     * @var float
     *
     * @ORM\Column(name="price_contrat", type="float", precision=10, scale=0)
     */
    private $priceContrat;

    /**
     * @var bool
     *
     * @ORM\Column(name="enable_contrat", type="boolean")
     */
    private $enableContrat;

    /**
     * @var int
     *
     * @ORM\Column(name="id_contrat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idContrat;

    /**
     * @var \VB\CustomerBundle\Entity\CustomerOption
     *
     * @ORM\ManyToOne(targetEntity="VB\CustomerBundle\Entity\CustomerOption", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_customer_option", referencedColumnName="id_customer_option", nullable=false)
     * })
     */
    private $idCustomerOption;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VB\CustomerBundle\Entity\Customer", mappedBy="idContrat")
     */
    private $idCustomer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCustomer = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set startDateContrat.
     *
     * @param \DateTime $startDateContrat
     *
     * @return Contrat
     */
    public function setStartDateContrat($startDateContrat)
    {
        $this->startDateContrat = $startDateContrat;

        return $this;
    }

    /**
     * Get startDateContrat.
     *
     * @return \DateTime
     */
    public function getStartDateContrat()
    {
        return $this->startDateContrat;
    }

    /**
     * Set endDateContrat.
     *
     * @param \DateTime $endDateContrat
     *
     * @return Contrat
     */
    public function setEndDateContrat($endDateContrat)
    {
        $this->endDateContrat = $endDateContrat;

        return $this;
    }

    /**
     * Get endDateContrat.
     *
     * @return \DateTime
     */
    public function getEndDateContrat()
    {
        return $this->endDateContrat;
    }

    /**
     * Set priceContrat.
     *
     * @param float $priceContrat
     *
     * @return Contrat
     */
    public function setPriceContrat($priceContrat)
    {
        $this->priceContrat = $priceContrat;

        return $this;
    }

    /**
     * Get priceContrat.
     *
     * @return float
     */
    public function getPriceContrat()
    {
        return $this->priceContrat;
    }

    /**
     * Set enableContrat.
     *
     * @param bool $enableContrat
     *
     * @return Contrat
     */
    public function setEnableContrat($enableContrat)
    {
        $this->enableContrat = $enableContrat;

        return $this;
    }

    /**
     * Get enableContrat.
     *
     * @return bool
     */
    public function getEnableContrat()
    {
        return $this->enableContrat;
    }

    /**
     * Set idContrat.
     *
     * @param int $idContrat
     *
     * @return Contrat
     */
    public function setIdContrat($idContrat)
    {
        $this->idContrat = $idContrat;

        return $this;
    }

    /**
     * Get idContrat.
     *
     * @return int
     */
    public function getIdContrat()
    {
        return $this->idContrat;
    }

    /**
     * Set idCustomerOption.
     *
     * @param \VB\CustomerBundle\Entity\CustomerOption $idCustomerOption
     *
     * @return Contrat
     */
    public function setIdCustomerOption(\VB\CustomerBundle\Entity\CustomerOption $idCustomerOption)
    {
        $this->idCustomerOption = $idCustomerOption;

        return $this;
    }

    /**
     * Get idCustomerOption.
     *
     * @return \VB\CustomerBundle\Entity\CustomerOption
     */
    public function getIdCustomerOption()
    {
        return $this->idCustomerOption;
    }

    /**
     * Add idCustomer.
     *
     * @param \VB\CustomerBundle\Entity\Customer $idCustomer
     *
     * @return Contrat
     */
    public function addIdCustomer(\VB\CustomerBundle\Entity\Customer $idCustomer)
    {
        $this->idCustomer[] = $idCustomer;

        return $this;
    }

    /**
     * Remove idCustomer.
     *
     * @param \VB\CustomerBundle\Entity\Customer $idCustomer
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdCustomer(\VB\CustomerBundle\Entity\Customer $idCustomer)
    {
        return $this->idCustomer->removeElement($idCustomer);
    }

    /**
     * Get idCustomer.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    public function __toString() {
        return (string) $this->idContrat;
    }
}
