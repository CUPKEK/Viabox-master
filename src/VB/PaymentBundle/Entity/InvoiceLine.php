<?php

namespace VB\PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvoiceLine
 *
 * @ORM\Table(name="invoice_line", indexes={@ORM\Index(name="Invoice_line_Production0_FK", columns={"id_production"})})
 * @ORM\Entity(repositoryClass="VB\PaymentBundle\Repository\InvoiceLineRepository")
 */
class InvoiceLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_line", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLine;

    /**
     * @var \VB\ProductionBundle\Entity\Production
     *
     * @ORM\ManyToOne(targetEntity="VB\ProductionBundle\Entity\Production")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_production", referencedColumnName="id_production")
     * })
     */
    private $idProduction;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VB\PaymentBundle\Entity\Invoices", inversedBy="idLine")
     * @ORM\JoinTable(name="comprised",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_line", referencedColumnName="id_line")
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
     * Set idLine.
     *
     * @param int $idLine
     *
     * @return InvoiceLine
     */
    public function setIdLine($idLine)
    {
        $this->idLine = $idLine;

        return $this;
    }

    /**
     * Get idLine.
     *
     * @return int
     */
    public function getIdLine()
    {
        return $this->idLine;
    }

    /**
     * Set idProduction.
     *
     * @param \VB\ProductionBundle\Entity\Production|null $idProduction
     *
     * @return InvoiceLine
     */
    public function setIdProduction(\VB\ProductionBundle\Entity\Production $idProduction = null)
    {
        $this->idProduction = $idProduction;

        return $this;
    }

    /**
     * Get idProduction.
     *
     * @return \VB\ProductionBundle\Entity\Production|null
     */
    public function getIdProduction()
    {
        return $this->idProduction;
    }

    /**
     * Add idInvoice.
     *
     * @param \VB\PaymentBundle\Entity\Invoices $idInvoice
     *
     * @return InvoiceLine
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
        return (string) $this->idLine;
    }

}
