<?php

namespace VB\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShipperAddress
 *
 * @ORM\Table(name="shipper_address")
 * @ORM\Entity(repositoryClass="VB\ProductionBundle\Repository\ShipperAddressRepository")
 */
class ShipperAddress
{
    /**
     * @var string
     *
     * @ORM\Column(name="title_shipper", type="string", length=50, nullable=false)
     */
    private $titleShipper;

    /**
     * @var string
     *
     * @ORM\Column(name="address_s", type="string", length=50, nullable=false)
     */
    private $addressS;

    /**
     * @var string|null
     *
     * @ORM\Column(name="additionaladdress_s", type="string", length=50, nullable=true)
     */
    private $additionaladdressS;

    /**
     * @var string
     *
     * @ORM\Column(name="country_s", type="string", length=25, nullable=false)
     */
    private $countryS;

    /**
     * @var string
     *
     * @ORM\Column(name="city_s", type="string", length=50, nullable=false)
     */
    private $cityS;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal_s", type="string", nullable=false)
     */
    private $codePostalS;

    /**
     * @var int
     *
     * @ORM\Column(name="id_shipper_address", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idShipperAddress;



    /**
     * Set titleShipper.
     *
     * @param string $titleShipper
     *
     * @return ShipperAddress
     */
    public function setTitleShipper($titleShipper)
    {
        $this->titleShipper = $titleShipper;

        return $this;
    }

    /**
     * Get titleShipper.
     *
     * @return string
     */
    public function getTitleShipper()
    {
        return $this->titleShipper;
    }

    /**
     * Set addressS.
     *
     * @param string $addressS
     *
     * @return ShipperAddress
     */
    public function setAddressS($addressS)
    {
        $this->addressS = $addressS;

        return $this;
    }

    /**
     * Get addressS.
     *
     * @return string
     */
    public function getAddressS()
    {
        return $this->addressS;
    }

    /**
     * Set additionaladdressS.
     *
     * @param string|null $additionaladdressS
     *
     * @return ShipperAddress
     */
    public function setAdditionalAddressS($additionaladdressS = null)
    {
        $this->additionaladdressS = $additionaladdressS;

        return $this;
    }

    /**
     * Get additionaladdressS.
     *
     * @return string|null
     */
    public function getAdditionalAddressS()
    {
        return $this->additionaladdressS;
    }

    /**
     * Set countryS.
     *
     * @param string $countryS
     *
     * @return ShipperAddress
     */
    public function setCountryS($countryS)
    {
        $this->countryS = $countryS;

        return $this;
    }

    /**
     * Get countryS.
     *
     * @return string
     */
    public function getCountryS()
    {
        return $this->countryS;
    }

    /**
     * Set cityS.
     *
     * @param string $cityS
     *
     * @return ShipperAddress
     */
    public function setCityS($cityS)
    {
        $this->cityS = $cityS;

        return $this;
    }

    /**
     * Get cityS.
     *
     * @return string
     */
    public function getCityS()
    {
        return $this->cityS;
    }

    /**
     * Set codePostalS.
     *
     * @param string $codePostalS
     *
     * @return ShipperAddress
     */
    public function setCodePostalS($codePostalS)
    {
        $this->codePostalS = $codePostalS;

        return $this;
    }

    /**
     * Get codePostalS.
     *
     * @return string
     */
    public function getCodePostalS()
    {
        return $this->codePostalS;
    }

    /**
     * Set idShipperAddress.
     *
     * @param int $idShipperAddress
     *
     * @return ShipperAddress
     */
    public function setIdShipperAddress($idShipperAddress)
    {
        $this->idShipperAddress = $idShipperAddress;

        return $this;
    }


    /**
     * Get idShipperAddress.
     *
     * @return int
     */
    public function getIdShipperAddress()
    {
        return $this->idShipperAddress;
    }

    public function __toString() {
        return (string) $this->idShipperAddress;
    }

}
