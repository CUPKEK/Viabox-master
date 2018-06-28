<?php

namespace VB\PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypePayment
 *
 * @ORM\Table(name="type_payment")
 * @ORM\Entity(repositoryClass="VB\PaymentBundle\Repository\TypePaymentRepository")
 */
class TypePayment
{
    /**
     * @var string
     *
     * @ORM\Column(name="type_payment", type="string", length=20, nullable=false)
     */
    private $typePayment;

    /**
     * @var int
     *
     * @ORM\Column(name="id_type_payment", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypePayment;



    /**
     * Set typePayment.
     *
     * @param string $typePayment
     *
     * @return TypePayment
     */
    public function setTypePayment($typePayment)
    {
        $this->typePayment = $typePayment;

        return $this;
    }

    /**
     * Get typePayment.
     *
     * @return string
     */
    public function getTypePayment()
    {
        return $this->typePayment;
    }

    /**
     * Set idTypePayment.
     *
     * @param int $idTypePayment
     *
     * @return TypePayment
     */
    public function setIdTypePayment($idTypePayment)
    {
        $this->idTypePayment = $idTypePayment;

        return $this;
    }

    /**
     * Get idTypePayment.
     *
     * @return int
     */
    public function getIdTypePayment()
    {
        return $this->idTypePayment;
    }

    public function __toString() {
        return (string) $this->idTypePayment;
    }
    
}
