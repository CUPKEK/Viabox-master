<?php

namespace VB\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerAdmin
 *
 * @ORM\Table(name="customer_admin")
 * @ORM\Entity(repositoryClass="VB\CustomerBundle\Repository\CustomerAdminRepository")
 */
class CustomerAdmin
{

    /**
     * @var bool
     *
     * @ORM\Column(name="enable", type="boolean", nullable=false)
     */
    private $enable;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=25, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="email_verification_token", type="string", length=25, nullable=false)
     */
    private $emailVerificationToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="verified_at", type="date", nullable=false)
     */
    private $verifiedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expired_at", type="date", nullable=false)
     */
    private $expiredAt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=30, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="password_reset_token", type="string", length=30, nullable=false)
     */
    private $passwordResetToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="password_requested_at", type="date", nullable=false)
     */
    private $passwordRequestedAt;

    /**
     * @var int
     *
     * @ORM\Column(name="id_customer_admin", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCustomerAdmin;




    /**
     * Set enable.
     *
     * @param bool $enable
     *
     * @return CustomerAdmin
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Get enable.
     *
     * @return bool
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Set login.
     *
     * @param string $login
     *
     * @return CustomerAdmin
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set emailVerificationToken.
     *
     * @param string $emailVerificationToken
     *
     * @return CustomerAdmin
     */
    public function setEmailVerificationToken($emailVerificationToken)
    {
        $this->emailVerificationToken = $emailVerificationToken;

        return $this;
    }

    /**
     * Get emailVerificationToken.
     *
     * @return string
     */
    public function getEmailVerificationToken()
    {
        return $this->emailVerificationToken;
    }

    /**
     * Set verifiedAt.
     *
     * @param \DateTime $verifiedAt
     *
     * @return CustomerAdmin
     */
    public function setVerifiedAt($verifiedAt)
    {
        $this->verifiedAt = $verifiedAt;

        return $this;
    }

    /**
     * Get verifiedAt.
     *
     * @return \DateTime
     */
    public function getVerifiedAt()
    {
        return $this->verifiedAt;
    }

    /**
     * Set expiredAt.
     *
     * @param \DateTime $expiredAt
     *
     * @return CustomerAdmin
     */
    public function setExpiredAt($expiredAt)
    {
        $this->expiredAt = $expiredAt;

        return $this;
    }

    /**
     * Get expiredAt.
     *
     * @return \DateTime
     */
    public function getExpiredAt()
    {
        return $this->expiredAt;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return CustomerAdmin
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set passwordResetToken.
     *
     * @param string $passwordResetToken
     *
     * @return CustomerAdmin
     */
    public function setPasswordResetToken($passwordResetToken)
    {
        $this->passwordResetToken = $passwordResetToken;

        return $this;
    }

    /**
     * Get passwordResetToken.
     *
     * @return string
     */
    public function getPasswordResetToken()
    {
        return $this->passwordResetToken;
    }

    /**
     * Set passwordRequestedAt.
     *
     * @param \DateTime $passwordRequestedAt
     *
     * @return CustomerAdmin
     */
    public function setPasswordRequestedAt($passwordRequestedAt)
    {
        $this->passwordRequestedAt = $passwordRequestedAt;

        return $this;
    }

    /**
     * Get passwordRequestedAt.
     *
     * @return \DateTime
     */
    public function getPasswordRequestedAt()
    {
        return $this->passwordRequestedAt;
    }


    /**
     * Get idCustomerAdmin.
     *
     * @return int
     */
    public function getIdCustomerAdmin()
    {
        return $this->idCustomerAdmin;
    }



    public function __toString() {
        return (string) $this->idCustomerAdmin;
    }
}
