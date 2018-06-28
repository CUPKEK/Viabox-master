<?php

namespace VB\ProspectsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prospect
 *
 * @ORM\Table(name="prospect", indexes={@ORM\Index(name="prospect_Adresse_Domiciliataire0_FK", columns={"id_domiciliataire"})})
 * @ORM\Entity(repositoryClass="VB\ProspectsBundle\Repository\ProspectRepository")
 */
class Prospect
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name_p", type="string", length=50, nullable=true)
     */
    private $firstNameP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name_p", type="string", length=50, nullable=true)
     */
    private $lastNameP;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birthday_P", type="date", nullable=true)
     */
    private $birthdayP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_number_fixe_P", type="string", length=15, nullable=true)
     */
    private $phoneNumberFixeP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_number_portable_P", type="string", length=15, nullable=true)
     */
    private $phoneNumberPortableP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_P", type="string", length=40, nullable=true)
     */
    private $emailP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_p", type="string", length=50, nullable=true)
     */
    private $addressP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address2_P", type="string", length=50, nullable=true)
     */
    private $address2P;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_P", type="string", length=40, nullable=true)
     */
    private $countryP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city_P", type="string", length=50, nullable=true)
     */
    private $cityP;

    /**
     * @var string
     *
     * @ORM\Column(name="type_entity_p", type="string", length=20, nullable=true)
     */
    private $typeEntityP;

    /**
     * @var int
     *
     * @ORM\Column(name="id_prospect", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProspect;

    /**
     * @var \VB\OptionBundle\Entity\AdresseDomiciliataire|null
     *
     * @ORM\ManyToOne(targetEntity="VB\OptionBundle\Entity\AdresseDomiciliataire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_domiciliataire", referencedColumnName="id_domiciliataire", nullable=true)
     * })
     */
    private $idDomiciliataire;



    /**
     * Set firstNameP.
     *
     * @param string|null $firstNameP
     *
     * @return Prospect
     */
    public function setFirstNameP($firstNameP = null)
    {
        $this->firstNameP = $firstNameP;

        return $this;
    }

    /**
     * Get firstNameP.
     *
     * @return string|null
     */
    public function getFirstNameP()
    {
        return $this->firstNameP;
    }

    /**
     * Set lastNameP.
     *
     * @param string|null $lastNameP
     *
     * @return Prospect
     */
    public function setLastNameP($lastNameP = null)
    {
        $this->lastNameP = $lastNameP;

        return $this;
    }

    /**
     * Get lastNameP.
     *
     * @return string|null
     */
    public function getLastNameP()
    {
        return $this->lastNameP;
    }

    /**
     * Set birthdayP.
     *
     * @param \DateTime|null $birthdayP
     *
     * @return Prospect
     */
    public function setBirthdayP($birthdayP = null)
    {
        $this->birthdayP = $birthdayP;

        return $this;
    }

    /**
     * Get birthdayP.
     *
     * @return \DateTime|null
     */
    public function getBirthdayP()
    {
        return $this->birthdayP;
    }

    /**
     * Set phoneNumberFixeP.
     *
     * @param int|null $phoneNumberFixeP
     *
     * @return Prospect
     */
    public function setPhoneNumberFixeP($phoneNumberFixeP = null)
    {
        $this->phoneNumberFixeP = $phoneNumberFixeP;

        return $this;
    }

    /**
     * Get phoneNumberFixeP.
     *
     * @return int|null
     */
    public function getPhoneNumberFixeP()
    {
        return $this->phoneNumberFixeP;
    }

    /**
     * Set phoneNumberPortableP.
     *
     * @param int|null $phoneNumberPortableP
     *
     * @return Prospect
     */
    public function setPhoneNumberPortableP($phoneNumberPortableP = null)
    {
        $this->phoneNumberPortableP = $phoneNumberPortableP;

        return $this;
    }

    /**
     * Get phoneNumberPortableP.
     *
     * @return int|null
     */
    public function getPhoneNumberPortableP()
    {
        return $this->phoneNumberPortableP;
    }

    /**
     * Set emailP.
     *
     * @param string|null $emailP
     *
     * @return Prospect
     */
    public function setEmailP($emailP = null)
    {
        $this->emailP = $emailP;

        return $this;
    }

    /**
     * Get emailP.
     *
     * @return string|null
     */
    public function getEmailP()
    {
        return $this->emailP;
    }

    /**
     * Set addressP.
     *
     * @param string|null $addressP
     *
     * @return Prospect
     */
    public function setAddressP($addressP = null)
    {
        $this->addressP = $addressP;

        return $this;
    }

    /**
     * Get addressP.
     *
     * @return string|null
     */
    public function getAddressP()
    {
        return $this->addressP;
    }

    /**
     * Set address2P.
     *
     * @param string|null $address2P
     *
     * @return Prospect
     */
    public function setAddress2P($address2P = null)
    {
        $this->address2P = $address2P;

        return $this;
    }

    /**
     * Get address2P.
     *
     * @return string|null
     */
    public function getAddress2P()
    {
        return $this->address2P;
    }

    /**
     * Set countryP.
     *
     * @param string|null $countryP
     *
     * @return Prospect
     */
    public function setCountryP($countryP = null)
    {
        $this->countryP = $countryP;

        return $this;
    }

    /**
     * Get countryP.
     *
     * @return string|null
     */
    public function getCountryP()
    {
        return $this->countryP;
    }

    /**
     * Set cityP.
     *
     * @param string|null $cityP
     *
     * @return Prospect
     */
    public function setCityP($cityP = null)
    {
        $this->cityP = $cityP;

        return $this;
    }

    /**
     * Get cityP.
     *
     * @return string|null
     */
    public function getCityP()
    {
        return $this->cityP;
    }

    /**
     * Set typeEntityP.
     *
     * @param string|null $typeEntityP
     *
     * @return Prospect
     */
    public function setTypeEntityP($typeEntityP = null)
    {
        $this->typeEntityP = $typeEntityP;

        return $this;
    }

    /**
     * Get typeEntityP.
     *
     * @return string|null
     */
    public function getTypeEntityP()
    {
        return $this->typeEntityP;
    }


    /**
     * Set idProspect.
     *
     * @param int $idProspect
     *
     * @return Prospect
     */
    public function setidProspect($idProspect)
    {
        $this->idProspect = $idProspect;

        return $this;
    }


    /**
     * Get idProspect.
     *
     * @return int
     */
    public function getIdProspect()
    {
        return $this->idProspect;
    }

    /**
     * Set idDomiciliataire.
     *
     * @param \VB\OptionBundle\Entity\AdresseDomiciliataire|null $idDomiciliataire
     *
     * @return Prospect
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

    public function __toString() {
        return (string) $this->idProspect;
    }

}
