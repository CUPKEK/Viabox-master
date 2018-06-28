<?php

namespace VB\OptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailOption
 *
 * @ORM\Table(name="mail_option")
 * @ORM\Entity(repositoryClass="VB\OptionBundle\Repository\MailOptionRepository")
 */
class MailOption
{
    /**
     * @var string
     *
     * @ORM\Column(name="option_mail", type="string", length=20, nullable=false)
     */
    private $optionMail;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_mail", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixMail;

    /**
     * @var int
     *
     * @ORM\Column(name="id_mail", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMail;



    /**
     * Set optionMail.
     *
     * @param string $optionMail
     *
     * @return MailOption
     */
    public function setOptionMail($optionMail)
    {
        $this->optionMail = $optionMail;

        return $this;
    }

    /**
     * Get optionMail.
     *
     * @return string
     */
    public function getOptionMail()
    {
        return $this->optionMail;
    }

    /**
     * Set prixMail.
     *
     * @param float $prixMail
     *
     * @return MailOption
     */
    public function setPrixMail($prixMail)
    {
        $this->prixMail = $prixMail;

        return $this;
    }

    /**
     * Get prixMail.
     *
     * @return float
     */
    public function getPrixMail()
    {
        return $this->prixMail;
    }


    /**
     * Set idMail.
     *
     * @param int $idMail
     *
     * @return MailOption
     */
    public function setIdMail($idMail)
    {
        $this->idMail = $idMail;

        return $this;
    }


    /**
     * Get idMail.
     *
     * @return int
     */
    public function getIdMail()
    {
        return $this->idMail;
    }

    public function __toString() {
        return (string) $this->idMail;
    }

}
