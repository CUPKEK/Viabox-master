<?php

namespace VB\PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bank
 *
 * @ORM\Table(name="bank")
 * @ORM\Entity(repositoryClass="VB\PaymentBundle\Repository\BankRepository")
 */
class Bank
{
    /**
     * @var string
     *
     * @ORM\Column(name="name_bank", type="string", length=25, nullable=false)
     */
    private $nameBank;

    /**
     * @var int
     *
     * @ORM\Column(name="id_bank", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBank;



    /**
     * Set nameBank.
     *
     * @param string $nameBank
     *
     * @return Bank
     */
    public function setNameBank($nameBank)
    {
        $this->nameBank = $nameBank;

        return $this;
    }

    /**
     * Get nameBank.
     *
     * @return string
     */
    public function getNameBank()
    {
        return $this->nameBank;
    }


    /**
     * Set idBank.
     *
     * @param int $idBank
     *
     * @return Bank
     */
    public function setIdBank($idBank)
    {
        $this->idBank = $idBank;

        return $this;
    }

    /**
     * Get idBank.
     *
     * @return int
     */
    public function getIdBank()
    {
        return $this->idBank;
    }

    public function __toString() {
        return (string) $this->idBank;
    }

}
