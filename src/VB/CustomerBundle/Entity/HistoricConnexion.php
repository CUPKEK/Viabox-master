<?php

namespace VB\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoricConnexion
 *
 * @ORM\Table(name="historic_connexion", indexes={@ORM\Index(name="Historic_Connexion_Customer_Admin0_FK", columns={"id_customer_admin"})})
 * @ORM\Entity(repositoryClass="VB\CustomerBundle\Repository\HistoricConnexionRepository")
 */
class HistoricConnexion
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_connexion", type="date", nullable=false)
     */
    private $dateConnexion;

    /**
     * @var int
     *
     * @ORM\Column(name="id_connexion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConnexion;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_customer_admin", referencedColumnName="id")
     * })
     */
    private $idCustomerAdmin;



    /**
     * Set dateConnexion.
     *
     * @param \DateTime $dateConnexion
     *
     * @return HistoricConnexion
     */
    public function setDateConnexion($dateConnexion)
    {
        $this->dateConnexion = $dateConnexion;

        return $this;
    }

    /**
     * Get dateConnexion.
     *
     * @return \DateTime
     */
    public function getDateConnexion()
    {
        return $this->dateConnexion;
    }


    /**
     * Set idConnexion.
     *
     * @param int $idConnexion
     *
     * @return HistoricConnexion
     */
    public function setIdConnexion($idConnexion)
    {
        $this->idConnexion = $idConnexion;

        return $this;
    }


    /**
     * Get idConnexion.
     *
     * @return int
     */
    public function getIdConnexion()
    {
        return $this->idConnexion;
    }

    /**
     * Set idCustomerAdmin.
     *
     * @param \Application\Sonata\UserBundle\Entity\User|null $idCustomerAdmin
     *
     * @return HistoricConnexion
     */
    public function setIdCustomerAdmin(\Application\Sonata\UserBundle\Entity\User $idCustomerAdmin = null)
    {
        $this->idCustomerAdmin = $idCustomerAdmin;

        return $this;
    }

    /**
     * Get idCustomerAdmin.
     *
     * @return \Application\Sonata\UserBundle\Entity\User|null
     */
    public function getIdCustomerAdmin()
    {
        return $this->idCustomerAdmin;
    }

    public function __toString() {
        return (string) $this->idConnexion;
    }
}
