<?php

namespace VB\OptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdresseDomiciliataire
 *
 * @ORM\Table(name="adresse_domiciliataire")
 * @ORM\Entity(repositoryClass="VB\OptionBundle\Repository\AdresseDomiciliataireRepository")
 */
class AdresseDomiciliataire
{
    /**
     * @var string
     *
     * @ORM\Column(name="title_d", type="string", length=50, nullable=false)
     */
    private $titleD;

    /**
     * @var string
     *
     * @ORM\Column(name="address_d", type="string", length=50, nullable=false)
     */
    private $addressD;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address2_d", type="string", length=50, nullable=true)
     */
    private $address2D;

    /**
     * @var string
     *
     * @ORM\Column(name="Country_d", type="string", length=25, nullable=false)
     */
    private $countryD;

    /**
     * @var string
     *
     * @ORM\Column(name="city_d", type="string", length=50, nullable=false)
     */
    private $cityD;

    /**
     * @var int
     *
     * @ORM\Column(name="Code_Postal", type="integer", nullable=false)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=15, nullable=false)
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="code_naf", type="string", length=10, nullable=false)
     */
    private $codeNaf;

    /**
     * @var string
     *
     * @ORM\Column(name="code_ape", type="string", length=10, nullable=false)
     */
    private $codeApe;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_tel", type="integer", nullable=false)
     */
    private $numeroTel;

    /**
     * @var int
     *
     * @ORM\Column(name="id_domiciliataire", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDomiciliataire;



    /**
     * Set titleD.
     *
     * @param string $titleD
     *
     * @return AdresseDomiciliataire
     */
    public function setTitleD($titleD)
    {
        $this->titleD = $titleD;

        return $this;
    }

    /**
     * Get titleD.
     *
     * @return string
     */
    public function getTitleD()
    {
        return $this->titleD;
    }

    /**
     * Set addressD.
     *
     * @param string $addressD
     *
     * @return AdresseDomiciliataire
     */
    public function setAddressD($addressD)
    {
        $this->addressD = $addressD;

        return $this;
    }

    /**
     * Get addressD.
     *
     * @return string
     */
    public function getAddressD()
    {
        return $this->addressD;
    }

    /**
     * Set address2D.
     *
     * @param string|null $address2D
     *
     * @return AdresseDomiciliataire
     */
    public function setAddress2D($address2D = null)
    {
        $this->address2D = $address2D;

        return $this;
    }

    /**
     * Get address2D.
     *
     * @return string|null
     */
    public function getAddress2D()
    {
        return $this->address2D;
    }

    /**
     * Set countryD.
     *
     * @param string $countryD
     *
     * @return AdresseDomiciliataire
     */
    public function setCountryD($countryD)
    {
        $this->countryD = $countryD;

        return $this;
    }

    /**
     * Get countryD.
     *
     * @return string
     */
    public function getCountryD()
    {
        return $this->countryD;
    }

    /**
     * Set cityD.
     *
     * @param string $cityD
     *
     * @return AdresseDomiciliataire
     */
    public function setCityD($cityD)
    {
        $this->cityD = $cityD;

        return $this;
    }

    /**
     * Get cityD.
     *
     * @return string
     */
    public function getCityD()
    {
        return $this->cityD;
    }

    /**
     * Set codePostal.
     *
     * @param int $codePostal
     *
     * @return AdresseDomiciliataire
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal.
     *
     * @return int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set siret.
     *
     * @param string $siret
     *
     * @return AdresseDomiciliataire
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret.
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set codeNaf.
     *
     * @param string $codeNaf
     *
     * @return AdresseDomiciliataire
     */
    public function setCodeNaf($codeNaf)
    {
        $this->codeNaf = $codeNaf;

        return $this;
    }

    /**
     * Get codeNaf.
     *
     * @return string
     */
    public function getCodeNaf()
    {
        return $this->codeNaf;
    }

    /**
     * Set codeApe.
     *
     * @param string $codeApe
     *
     * @return AdresseDomiciliataire
     */
    public function setCodeApe($codeApe)
    {
        $this->codeApe = $codeApe;

        return $this;
    }

    /**
     * Get codeApe.
     *
     * @return string
     */
    public function getCodeApe()
    {
        return $this->codeApe;
    }

    /**
     * Set numeroTel.
     *
     * @param int $numeroTel
     *
     * @return AdresseDomiciliataire
     */
    public function setNumeroTel($numeroTel)
    {
        $this->numeroTel = $numeroTel;

        return $this;
    }

    /**
     * Get numeroTel.
     *
     * @return int
     */
    public function getNumeroTel()
    {
        return $this->numeroTel;
    }


    /**
     * Set idDomiciliataire.
     *
     * @param string $idDomiciliataire
     *
     * @return AdresseDomiciliataire
     */
    public function setIdDomiciliataire($idDomiciliataire)
    {
        $this->idDomiciliataire = $idDomiciliataire;

        return $this;
    }


    /**
     * Get idDomiciliataire.
     *
     * @return int
     */
    public function getIdDomiciliataire()
    {
        return $this->idDomiciliataire;
    }

    public function __toString() {
        return (string) $this->idDomiciliataire;
    }
}
