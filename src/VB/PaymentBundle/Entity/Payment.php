<?php

namespace VB\PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment", indexes={@ORM\Index(name="Payment_Bank0_FK", columns={"id_bank"}), @ORM\Index(name="Payment_Customer1_FK", columns={"id_customer"}), @ORM\Index(name="Payment_Type_Payment2_FK", columns={"id_type_payment"})})
 * @ORM\Entity(repositoryClass="VB\PaymentBundle\Repository\PaymentRepository")
 */
class Payment
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_payment", type="date", nullable=false)
     */
    private $datePayment;

    /**
     * @var int
     *
     * @ORM\Column(name="num_transaction", type="integer", nullable=false)
     */
    private $numTransaction;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $amount;

    /**
     * @var int
     *
     * @ORM\Column(name="id_payment", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPayment;

    /**
     * @var \VB\PaymentBundle\Entity\Bank
     *
     * @ORM\ManyToOne(targetEntity="VB\PaymentBundle\Entity\Bank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bank", referencedColumnName="id_bank")
     * })
     */
    private $idBank;

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
     * @var \VB\PaymentBundle\Entity\TypePayment
     *
     * @ORM\ManyToOne(targetEntity="VB\PaymentBundle\Entity\TypePayment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_payment", referencedColumnName="id_type_payment")
     * })
     */
    private $idTypePayment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VB\PaymentBundle\Entity\Invoices", inversedBy="idPayment")
     * @ORM\JoinTable(name="composed",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_payment", referencedColumnName="id_payment")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_invoices", referencedColumnName="id_invoices")
     *   }
     * )
     */
    private $idInvoices;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idInvoices = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set datePayment.
     *
     * @param \DateTime $datePayment
     *
     * @return Payment
     */
    public function setDatePayment($datePayment)
    {
        $this->datePayment = $datePayment;

        return $this;
    }

    /**
     * Get datePayment.
     *
     * @return \DateTime
     */
    public function getDatePayment()
    {
        return $this->datePayment;
    }

    /**
     * Set numTransaction.
     *
     * @param int $numTransaction
     *
     * @return Payment
     */
    public function setNumTransaction($numTransaction)
    {
        $this->numTransaction = $numTransaction;

        return $this;
    }

    /**
     * Get numTransaction.
     *
     * @return int
     */
    public function getNumTransaction()
    {
        return $this->numTransaction;
    }

    /**
     * Set amount.
     *
     * @param float $amount
     *
     * @return Payment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set idPayment.
     *
     * @param int $idPayment
     *
     * @return Payment
     */
    public function setIdPayment($idPayment)
    {
        $this->idPayment = $idPayment;

        return $this;
    }

    /**
     * Get idPayment.
     *
     * @return int
     */
    public function getIdPayment()
    {
        return $this->idPayment;
    }

    /**
     * Set idBank.
     *
     * @param \VB\PaymentBundle\Entity\Bank|null $idBank
     *
     * @return Payment
     */
    public function setIdBank(\VB\PaymentBundle\Entity\Bank $idBank = null)
    {
        $this->idBank = $idBank;

        return $this;
    }

    /**
     * Get idBank.
     *
     * @return \VB\PaymentBundle\Entity\Bank|null
     */
    public function getIdBank()
    {
        return $this->idBank;
    }

    /**
     * Set idCustomer.
     *
     * @param \VB\CustomerBundle\Entity\Customer|null $idCustomer
     *
     * @return Payment
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
     * Set idTypePayment.
     *
     * @param \VB\PaymentBundle\Entity\TypePayment|null $idTypePayment
     *
     * @return Payment
     */
    public function setIdTypePayment(\VB\PaymentBundle\Entity\TypePayment $idTypePayment = null)
    {
        $this->idTypePayment = $idTypePayment;

        return $this;
    }

    /**
     * Get idTypePayment.
     *
     * @return \VB\PaymentBundle\Entity\TypePayment|null
     */
    public function getIdTypePayment()
    {
        return $this->idTypePayment;
    }

    /**
     * Add idInvoice.
     *
     * @param \VB\PaymentBundle\Entity\Invoices $idInvoice
     *
     * @return Payment
     */
    public function addIdInvoice(\VB\PaymentBundle\Entity\Invoices $idInvoice)
    {
        $this->idInvoices[] = $idInvoice;

        return $this;
    }

    /**
     * Remove idInvoice.
     *
     * @param \VB\PaymentBundle\Entity\Invoices $idInvoice
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdInvoice(\VB\PaymentBundle\Entity\Invoices $idInvoice)
    {
        return $this->idInvoices->removeElement($idInvoice);
    }

    /**
     * Get idInvoices.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdInvoices()
    {
        return $this->idInvoices;
    }

    public function __toString() {
        return (string) $this->idPayment;
    }
}
