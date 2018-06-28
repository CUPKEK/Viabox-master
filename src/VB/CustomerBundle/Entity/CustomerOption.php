<?php

namespace VB\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerOption
 *
 * @ORM\Table(name="customer_option", indexes={@ORM\Index(name="Customer_Option_form_Entity0_FK", columns={"id_form"}), @ORM\Index(name="Customer_Option_Mail_Option1_FK", columns={"id_mail"}), @ORM\Index(name="Customer_Option_Scan_Option2_FK", columns={"id_scan"}), @ORM\Index(name="Customer_Option_Customer3_FK", columns={"id_customer"}), @ORM\Index(name="Customer_Option_Adresse_Domiciliataire4_FK", columns={"id_domiciliataire"})})
 * @ORM\Entity(repositoryClass="VB\CustomerBundle\Repository\CustomerOptionRepository")
 */
class CustomerOption
{
    /**
     * @var float
     *
     * @ORM\Column(name="price_customer_option", type="float", precision=10, scale=0, nullable=false)
     */
    private $priceCustomerOption;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="to_date", type="date", nullable=false)
     */
    private $toDate;

    /**
     * @var int
     *
     * @ORM\Column(name="id_customer_option", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCustomerOption;

    /**
     * @var \VB\OptionBundle\Entity\AdresseDomiciliataire
     *
     * @ORM\ManyToOne(targetEntity="VB\OptionBundle\Entity\AdresseDomiciliataire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_domiciliataire", referencedColumnName="id_domiciliataire")
     * })
     */
    private $idDomiciliataire;

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
     * @var \VB\OptionBundle\Entity\MailOption
     *
     * @ORM\ManyToOne(targetEntity="VB\OptionBundle\Entity\MailOption")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mail", referencedColumnName="id_mail")
     * })
     */
    private $idMail;

    /**
     * @var \VB\OptionBundle\Entity\ScanOption
     *
     * @ORM\ManyToOne(targetEntity="VB\OptionBundle\Entity\ScanOption")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_scan", referencedColumnName="id_scan")
     * })
     */
    private $idScan;

    /**
     * @var \VB\OptionBundle\Entity\FormEntity
     *
     * @ORM\ManyToOne(targetEntity="VB\OptionBundle\Entity\FormEntity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_form", referencedColumnName="id_form")
     * })
     */
    private $idForm;




    /**
     * Set priceCustomerOption.
     *
     * @param float $priceCustomerOption
     *
     * @return CustomerOption
     */
    public function setPriceCustomerOption($priceCustomerOption)
    {
        $this->priceCustomerOption = $priceCustomerOption;

        return $this;
    }

    /**
     * Get priceCustomerOption.
     *
     * @return float
     */
    public function getPriceCustomerOption()
    {
        return $this->priceCustomerOption;
    }

    /**
     * Set toDate.
     *
     * @param \DateTime $toDate
     *
     * @return CustomerOption
     */
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;

        return $this;
    }

    /**
     * Get toDate.
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * Set idCustomerOption.
     *
     * @param int $idCustomerOption
     *
     * @return CustomerOption
     */
    public function setIdCustomerOption($idCustomerOption)
    {
        $this->idCustomerOption = $idCustomerOption;

        return $this;
    }

    /**
     * Get idCustomerOption.
     *
     * @return int
     */
    public function getIdCustomerOption()
    {
        return $this->idCustomerOption;
    }

    /**
     * Set idDomiciliataire.
     *
     * @param \VB\OptionBundle\Entity\AdresseDomiciliataire|null $idDomiciliataire
     *
     * @return CustomerOption
     */
    public function setIdDomiciliataire(\VB\OptionBundle\Entity\AdresseDomiciliataire $idDomiciliataire = null)
    {
        $this->idDomiciliataire = $idDomiciliataire;

        return $this;
    }

    /**
     * Get idDomiciliataire.
     *
     * @return \VB\OptionBundle\Entity\AdresseDomiciliataire|null
     */
    public function getIdDomiciliataire()
    {
        return $this->idDomiciliataire;
    }

    /**
     * Set idCustomer.
     *
     * @param \VB\CustomerBundle\Entity\Customer|null $idCustomer
     *
     * @return CustomerOption
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
     * Set idMail.
     *
     * @param \VB\OptionBundle\Entity\MailOption|null $idMail
     *
     * @return CustomerOption
     */
    public function setIdMail(\VB\OptionBundle\Entity\MailOption $idMail = null)
    {
        $this->idMail = $idMail;

        return $this;
    }

    /**
     * Get idMail.
     *
     * @return \VB\OptionBundle\Entity\MailOption|null
     */
    public function getIdMail()
    {
        return $this->idMail;
    }

    /**
     * Set idScan.
     *
     * @param \VB\OptionBundle\Entity\ScanOption|null $idScan
     *
     * @return CustomerOption
     */
    public function setIdScan(\VB\OptionBundle\Entity\ScanOption $idScan = null)
    {
        $this->idScan = $idScan;

        return $this;
    }

    /**
     * Get idScan.
     *
     * @return \VB\OptionBundle\Entity\ScanOption|null
     */
    public function getIdScan()
    {
        return $this->idScan;
    }

    /**
     * Set idForm.
     *
     * @param \VB\OptionBundle\Entity\FormEntity|null $idForm
     *
     * @return CustomerOption
     */
    public function setIdForm(\VB\OptionBundle\Entity\FormEntity $idForm)
    {
        $this->idForm = $idForm;

        return $this;
    }

    /**
     * Get idForm.
     *
     * @return \VB\OptionBundle\Entity\FormEntity
     */
    public function getIdForm()
    {
        return $this->idForm;
    }

    public function __toString() {
        return (string) $this->idCustomerOption;
    }
}
