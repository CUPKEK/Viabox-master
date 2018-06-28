<?php

namespace VB\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerAddress
 *
 * @ORM\Table(name="customer_address")
 * @ORM\Entity(repositoryClass="VB\CustomerBundle\Repository\CustomerAddressRepository")
 */
class CustomerAddress
{
    /**
     * @var string
     *
     * @ORM\Column(name="address_c", type="string", length=50, nullable=false)
     */
    private $addressC;

    /**
     * @var string
     *
     * @ORM\Column(name="address2_c", type="string", length=50, nullable=false)
     */
    private $address2C;

    /**
     * @var string
     *
     * @ORM\Column(name="country_c", type="string", length=25, nullable=false)
     */
    private $countryC;

    /**
     * @var string
     *
     * @ORM\Column(name="city_c", type="string", length=50, nullable=false)
     */
    private $cityC;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal_c", type="string", length=15, nullable=false)
     */
    private $codePostalC;

    /**
     * @var bool
     *
     * @ORM\Column(name="active_adress", type="boolean", nullable=false)
     */
    private $activeAdress;

    /**
     * @var int
     *
     * @ORM\Column(name="id_customer_address", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCustomerAddress;



    /**
     * Set addressC.
     *
     * @param string $addressC
     *
     * @return CustomerAddress
     */
    public function setAddressC($addressC)
    {
        $this->addressC = $addressC;

        return $this;
    }

    /**
     * Get addressC.
     *
     * @return string
     */
    public function getAddressC()
    {
        return $this->addressC;
    }

    /**
     * Set address2C.
     *
     * @param string $address2C
     *
     * @return CustomerAddress
     */
    public function setAddress2C($address2C)
    {
        $this->address2C = $address2C;

        return $this;
    }

    /**
     * Get address2C.
     *
     * @return string
     */
    public function getAddress2C()
    {
        return $this->address2C;
    }

    /**
     * Set countryC.
     *
     * @param string $countryC
     *
     * @return CustomerAddress
     */
    public function setCountryC($countryC)
    {
        $this->countryC = $countryC;

        return $this;
    }

    /**
     * Get countryC.
     *
     * @return string
     */
    public function getCountryC()
    {
        return $this->countryC;
    }

    /**
     * Set cityC.
     *
     * @param string $cityC
     *
     * @return CustomerAddress
     */
    public function setCityC($cityC)
    {
        $this->cityC = $cityC;

        return $this;
    }

    /**
     * Get cityC.
     *
     * @return string
     */
    public function getCityC()
    {
        return $this->cityC;
    }

    /**
     * Set codePostalC.
     *
     * @param int $codePostalC
     *
     * @return CustomerAddress
     */
    public function setCodePostalC($codePostalC)
    {
        $this->codePostalC = $codePostalC;

        return $this;
    }

    /**
     * Get codePostalC.
     *
     * @return int
     */
    public function getCodePostalC()
    {
        return $this->codePostalC;
    }

    /**
     * Set activeAdress.
     *
     * @param bool $activeAdress
     *
     * @return CustomerAddress
     */
    public function setActiveAdress($activeAdress)
    {
        $this->activeAdress = $activeAdress;

        return $this;
    }

    /**
     * Get activeAdress.
     *
     * @return bool
     */
    public function getActiveAdress()
    {
        return $this->activeAdress;
    }

    /**
     * Set idCustomerAddress.
     *
     * @param int $idCustomerAddress
     *
     * @return CustomerAddress
     */
    public function setIdCustomerAddress($idCustomerAddress)
    {
        $this->idCustomerAddress = $idCustomerAddress;

        return $this;
    }

    /**
     * Get idCustomerAddress.
     *
     * @return int
     */
    public function getIdCustomerAddress()
    {
        return $this->idCustomerAddress;
    }

    public function __toString() {
        return (string) $this->idCustomerAddress;
    }

}
