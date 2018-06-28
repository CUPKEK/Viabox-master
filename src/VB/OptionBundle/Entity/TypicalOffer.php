<?php
namespace VB\OptionBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * TypicalOffer
 *
 * @ORM\Table(name="typical_offer", indexes={@ORM\Index(name="Typical_Offer_Adresse_Domiciliataire0_FK", columns={"id_domiciliataire"}), @ORM\Index(name="Typical_Offer_Form_Entity1_FK", columns={"id_form"})})
 * @ORM\Entity(repositoryClass="VB\OptionBundle\Repository\TypicalOfferRepository")
 */
class TypicalOffer
{
    /**
     * @var float
     *
     * @ORM\Column(name="price_offer", type="float", precision=10, scale=0, nullable=false)
     */
    private $priceOffer;
    /**
     * @var int
     *
     * @ORM\Column(name="id_offer", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOffer;
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
     * @var \VB\OptionBundle\Entity\FormEntity
     *
     * @ORM\ManyToOne(targetEntity="VB\OptionBundle\Entity\FormEntity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_form", referencedColumnName="id_form")
     * })
     */
    private $idForm;
    /**
     * Set priceOffer.
     *
     * @param float $priceOffer
     *
     * @return TypicalOffer
     */
    public function setPriceOffer($priceOffer)
    {
        $this->priceOffer = $priceOffer;
        return $this;
    }
    /**
     * Get priceOffer.
     *
     * @return float
     */
    public function getPriceOffer()
    {
        return $this->priceOffer;
    }
    /**
     * Set idOffer.
     *
     * @param int $idOffer
     *
     * @return TypicalOffer
     */
    public function setIdOffer($idOffer)
    {
        $this->idOffer = $idOffer;
        return $this;
    }
    /**
     * Get idOffer.
     *
     * @return int
     */
    public function getIdOffer()
    {
        return $this->idOffer;
    }
    /**
     * Set idDomiciliataire.
     *
     * @param \VB\OptionBundle\Entity\AdresseDomiciliataire|null $idDomiciliataire
     *
     * @return TypicalOffer
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
     * Set idForm.
     *
     * @param \VB\OptionBundle\Entity\FormEntity $idForm
     *
     * @return TypicalOffer
     */
    public function setIdForm(\VB\OptionBundle\Entity\FormEntity $idForm )
    {
        $this->idForm = $idForm;
        return $this;
    }
    /**
     * Get idForm.
     *
     * @return \VB\OptionBundle\Entity\FormEntity|null
     */
    public function getIdForm()
    {
        return $this->idForm;
    }
    public function __toString() {
        return (string) $this->idOffer;
    }
}