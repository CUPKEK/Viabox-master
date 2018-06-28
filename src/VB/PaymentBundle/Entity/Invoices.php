<?php

namespace VB\PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoices
 *
 * @ORM\Table(name="invoices", indexes={@ORM\Index(name="Invoices_Contrat0_FK", columns={"id_contrat"})})
 * @ORM\Entity(repositoryClass="VB\PaymentBundle\Repository\InvoicesRepository")
 */
class Invoices
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_invoices", type="date", nullable=false)
     */
    private $dateInvoices;

    /**
     * @var float
     *
     * @ORM\Column(name="sum", type="float", precision=10, scale=0, nullable=false)
     */
    private $sum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pdf_invoice", type="string", precision=10, scale=0, nullable=true)
     */
    private $pdfInvoice;

    /**
     * @var float
     *
     * @ORM\Column(name="debit", type="float", precision=10, scale=0, nullable=false)
     */
    private $debit;

    /**
     * @var int
     *
     * @ORM\Column(name="id_invoices", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInvoices;

    /**
     * @var \VB\CustomerBundle\Entity\Contrat
     *
     * @ORM\ManyToOne(targetEntity="VB\CustomerBundle\Entity\Contrat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_contrat", referencedColumnName="id_contrat")
     * })
     */
    private $idContrat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VB\PaymentBundle\Entity\Payment", mappedBy="idInvoices")
     */
    private $idPayment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VB\PaymentBundle\Entity\InvoiceLine", mappedBy="idInvoices")
     */
    private $idLine;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPayment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idLine = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set dateInvoices.
     *
     * @param \DateTime $dateInvoices
     *
     * @return Invoices
     */
    public function setDateInvoices($dateInvoices)
    {
        $this->dateInvoices = $dateInvoices;

        return $this;
    }

    /**
     * Get dateInvoices.
     *
     * @return \DateTime
     */
    public function getDateInvoices()
    {
        return $this->dateInvoices;
    }

    /**
     * Set sum.
     *
     * @param float $sum
     *
     * @return Invoices
     */
    public function setSum($sum)
    {
        $this->sum = $sum;

        return $this;
    }

    /**
     * Get sum.
     *
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Set pdfInvoice.
     *
     * @param string|null $pdfInvoice
     *
     * @return Invoices
     */
    public function setPdfInvoice($pdfInvoice = null)
    {
        $this->pdfInvoice = $pdfInvoice;

        return $this;
    }

    /**
     * Get pdfInvoice.
     *
     * @return string|null
     */
    public function getPdfInvoice()
    {
        return $this->pdfInvoice;
    }

    /**
     * Set debit.
     *
     * @param float $debit
     *
     * @return Invoices
     */
    public function setDebit($debit)
    {
        $this->debit = $debit;

        return $this;
    }

    /**
     * Get debit.
     *
     * @return float
     */
    public function getDebit()
    {
        return $this->debit;
    }


    /**
     * Set idInvoices.
     *
     * @param int $idInvoices
     *
     * @return Invoices
     */
    public function setIdInvoices($idInvoices)
    {
        $this->idInvoices = $idInvoices;

        return $this;
    }


    /**
     * Get idInvoices.
     *
     * @return int
     */
    public function getIdInvoices()
    {
        return $this->idInvoices;
    }

    /**
     * Set idContrat.
     *
     * @param \VB\CustomerBundle\Entity\Contrat|null $idContrat
     *
     * @return Invoices
     */
    public function setIdContrat(\VB\CustomerBundle\Entity\Contrat $idContrat = null)
    {
        $this->idContrat = $idContrat;

        return $this;
    }

    /**
     * Get idContrat.
     *
     * @return \VB\CustomerBundle\Entity\Contrat|null
     */
    public function getIdContrat()
    {
        return $this->idContrat;
    }

    /**
     * Add idPayment.
     *
     * @param \VB\PaymentBundle\Entity\Payment $idPayment
     *
     * @return Invoices
     */
    public function addIdPayment(\VB\PaymentBundle\Entity\Payment $idPayment)
    {
        $this->idPayment[] = $idPayment;

        return $this;
    }

    /**
     * Remove idPayment.
     *
     * @param \VB\PaymentBundle\Entity\Payment $idPayment
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdPayment(\VB\PaymentBundle\Entity\Payment $idPayment)
    {
        return $this->idPayment->removeElement($idPayment);
    }

    /**
     * Get idPayment.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdPayment()
    {
        return $this->idPayment;
    }

    /**
     * Add idLine.
     *
     * @param \VB\PaymentBundle\Entity\InvoiceLine $idLine
     *
     * @return Invoices
     */
    public function addIdLine(\VB\PaymentBundle\Entity\InvoiceLine $idLine)
    {
        $this->idLine[] = $idLine;

        return $this;
    }

    /**
     * Remove idLine.
     *
     * @param \VB\PaymentBundle\Entity\InvoiceLine $idLine
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdLine(\VB\PaymentBundle\Entity\InvoiceLine $idLine)
    {
        return $this->idLine->removeElement($idLine);
    }

    /**
     * Get idLine.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdLine()
    {
        return $this->idLine;
    }

    public function __toString() {
        return (string) $this->idInvoices;
    }
}
