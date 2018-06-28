r<?php
namespace VB\CustomerBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * Customer
 *
 * @ORM\Table(name="customer", uniqueConstraints={@ORM\UniqueConstraint(name="Customer_Customer_Admin0_AK", columns={"id_User"})}, indexes={@ORM\Index(name="Customer_Customer_Address0_FK", columns={"id_customer_address"})}, indexes={@ORM\Index(name="Customer_Customer_Entity_FK", columns={"id_customer_entity"})})
 * @ORM\Entity(repositoryClass="VB\CustomerBundle\Repository\CustomerRepository")
 */
class Customer
{
    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=50, nullable=false)
     */
    private $firstName;
    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50, nullable=false)
     */
    private $lastName;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=false)
     */
    private $birthday;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $createdAt;
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="update_at", type="date", nullable=true)
     */
    private $updateAt;
    /**
     * @var int|null
     *
     * @ORM\Column(name="phone_number_fixe", type="integer", nullable=true)
     */
    private $phoneNumberFixe;
    /**
     * @var int
     *
     * @ORM\Column(name="phone_number_portable", type="integer", nullable=false)
     */
    private $phoneNumberPortable;
    /**
     * @var bool
     *
     * @ORM\Column(name="subscribe_to_newsletter", type="boolean", nullable=false)
     */
    private $subscribeToNewsletter;
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30, nullable=false)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=20, nullable=true)
     */
    private $siret;
    /**
     * @var string|null
     *
     * @ORM\Column(name="society", type="string", length=40, nullable=true)
     */
    private $society;
    /**
     * @var string|null
     *
     * @ORM\Column(name="commercial_name", type="string", length=40, nullable=true)
     */
    private $commercialName;
    /**
     * @var string|null
     *
     * @ORM\Column(name="headquarter", type="string", length=50, nullable=true)
     */
    private $headquarter;
    /**
     * @var string|null
     *
     * @ORM\Column(name="CP_Society", type="string", length=10, nullable=true)
     */
    private $CPSociety;
    /**
     * @var string|null
     *
     * @ORM\Column(name="City_Society", type="string", length=25, nullable=true)
     */
    private $CitySociety;
    /**
     * @var string|null
     *
     * @ORM\Column(name="piece_identy", type="string", length=25, nullable=true)
     */
    private $PieceIdenty;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=true)
     */
    private $Status;
    /**
     * @var string|null
     *
     * @ORM\Column(name="kbis", type="string", length=25, nullable=true)
     */
    private $Kbis;
    /**
     * @var int
     *
     * @ORM\Column(name="id_customer", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCustomer;
    /**
     * @var \VB\CustomerBundle\Entity\CustomerAddress
     *
     * @ORM\ManyToOne(targetEntity="VB\CustomerBundle\Entity\CustomerAddress", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_customer_address", referencedColumnName="id_customer_address")
     * })
     */
    private $idCustomerAddress;
    /**
     * @var \VB\OptionBundle\Entity\FormEntity
     *
     * @ORM\ManyToOne(targetEntity="VB\OptionBundle\Entity\FormEntity", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_customer_entity", referencedColumnName="id_form")
     * })
     */
    private $idCustomerEntity;
    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     *
     * @ORM\OneToOne(targetEntity="Application\Sonata\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_User", referencedColumnName="id")
     * })
     */
    private $idUser;
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VB\CustomerBundle\Entity\Contrat", inversedBy="idCustomer")
     * @ORM\JoinTable(name="subscribe",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_customer", referencedColumnName="id_customer")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_contrat", referencedColumnName="id_contrat")
     *   }
     * )
     */
    private $idContrat;
    //GETTERS AND SETTERS -----------------------------------------------------------------------------------------------------------------------------------------------
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idContrat = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return Customer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return Customer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * Set birthday.
     *
     * @param \DateTime $birthday
     *
     * @return Customer
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
        return $this;
    }
    /**
     * Get birthday.
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }
    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Customer
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * Set updateAt.
     *
     * @param \DateTime|null $updateAt
     *
     * @return Customer
     */
    public function setUpdateAt($updateAt = null)
    {
        $this->updateAt = $updateAt;
        return $this;
    }
    /**
     * Get updateAt.
     *
     * @return \DateTime|null
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }
    /**
     * Set phoneNumberFixe.
     *
     * @param int|null $phoneNumberFixe
     *
     * @return Customer
     */
    public function setPhoneNumberFixe($phoneNumberFixe = null)
    {
        $this->phoneNumberFixe = $phoneNumberFixe;
        return $this;
    }
    /**
     * Get phoneNumberFixe.
     *
     * @return int|null
     */
    public function getPhoneNumberFixe()
    {
        return $this->phoneNumberFixe;
    }
    /**
     * Set phoneNumberPortable.
     *
     * @param int $phoneNumberPortable
     *
     * @return Customer
     */
    public function setPhoneNumberPortable($phoneNumberPortable)
    {
        $this->phoneNumberPortable = $phoneNumberPortable;
        return $this;
    }
    /**
     * Get phoneNumberPortable.
     *
     * @return int
     */
    public function getPhoneNumberPortable()
    {
        return $this->phoneNumberPortable;
    }
    /**
     * Set subscribeToNewsletter.
     *
     * @param bool $subscribeToNewsletter
     *
     * @return Customer
     */
    public function setSubscribeToNewsletter($subscribeToNewsletter)
    {
        $this->subscribeToNewsletter = $subscribeToNewsletter;
        return $this;
    }
    /**
     * Get subscribeToNewsletter.
     *
     * @return bool
     */
    public function getSubscribeToNewsletter()
    {
        return $this->subscribeToNewsletter;
    }
    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set siret.
     *
     * @param string|null $siret
     *
     * @return Customer
     */
    public function setSiret($siret = null)
    {
        $this->siret = $siret;
        return $this;
    }
    /**
     * Get siret.
     *
     * @return string|null
     */
    public function getSiret()
    {
        return $this->siret;
    }
    /**
     * Set society.
     *
     * @param string|null $society
     *
     * @return Customer
     */
    public function setSociety($society = null)
    {
        $this->society = $society;
        return $this;
    }
    /**
     * Get society.
     *
     * @return string|null
     */
    public function getSociety()
    {
        return $this->society;
    }
    /**
     * Set commercialName.
     *
     * @param string|null $commercialName
     *
     * @return Customer
     */
    public function setcommercialName($commercialName = null)
    {
        $this->commercialName = $commercialName;
        return $this;
    }
    /**
     * Get commercialName.
     *
     * @return string|null
     */
    public function getcommercialName()
    {
        return $this->commercialName;
    }
    /**
     * Set headquarter.
     *
     * @param string|null $headquarter
     *
     * @return Customer
     */
    public function setHeadquarter($headquarter = null)
    {
        $this->headquarter = $headquarter;
        return $this;
    }
    /**
     * Get headquarter.
     *
     * @return string|null
     */
    public function getHeadquarter()
    {
        return $this->headquarter;
    }
    /**
 * Set CPSociety.
 *
 * @param string|null $CPSociety
 *
 * @return Customer
 */
    public function setCPSociety($CPSociety = null)
    {
        $this->CPSociety = $CPSociety;
        return $this;
    }
    /**
     * Get CPSociety.
     *
     * @return string|null
     */
    public function getCPSociety()
    {
        return $this->CPSociety;
    }
    /**
     * Set PieceIdentity.
     *
     * @param string|null $PieceIdenty
     *
     * @return Customer
     */
    public function setPieceIdenty(UploadedFile $PieceIdenty = null)
    {
        $this->PieceIdenty = $PieceIdenty;
        return $this;
    }
    /**
     * Get PieceIdenty.
     *
     * @return string|null
     */
    public function getPieceIdenty()
    {
        return $this->PieceIdenty;
    }
    /**
     * Set Status.
     *
     * @param string|null $Status
     *
     * @return Customer
     */
    public function setStatus(UploadedFile $Status = null)
    {
        $this->Status = $Status;
        return $this;
    }
    /**
     * Get Status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Kbis.
     *
     * @param string|null $Kbis
     *
     * @return Customer
     */
    public function setKbis(UploadedFile $Kbis = null)
    {
        $this->Kbis = $Kbis;
        return $this;
    }
    /**
     * Get Kbis.
     *
     * @return string|null
     */
    public function getKbis()
    {
        return $this->Kbis;
    }
    /**
     * Set CitySociety.
     *
     * @param string|null $CitySociety
     *
     * @return Customer
     */
    public function setCitySociety($CitySociety = null)
    {
        $this->CitySociety = $CitySociety;
        return $this;
    }
    /**
     * Get CitySociety.
     *
     * @return string|null
     */
    public function getCitySociety()
    {
        return $this->CitySociety;
    }
    /**
     * Set idCustomer.
     *
     * @param int $idCustomer
     *
     * @return Customer
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;
        return $this;
    }
    /**
     * Get idCustomer.
     *
     * @return int
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }
    /**
     * Set idCustomerAddress.
     *
     * @param \VB\CustomerBundle\Entity\CustomerAddress|null $idCustomerAddress
     *
     * @return Customer
     */
    public function setIdCustomerAddress(\VB\CustomerBundle\Entity\CustomerAddress $idCustomerAddress = null)
    {
        $this->idCustomerAddress = $idCustomerAddress;
        return $this;
    }
    /**
     * Get idCustomerAddress.
     *
     * @return \VB\CustomerBundle\Entity\CustomerAddress|null
     */
    public function getIdCustomerAddress()
    {
        return $this->idCustomerAddress;
    }
    /**
     * Set idUser.
     *
     * @param \Application\Sonata\UserBundle\Entity\User|null $idUser
     *
     * @return Customer
     */
    public function setIdUser(\Application\Sonata\UserBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;
        return $this;
    }
    /**
     * Get idUser.
     *
     * @return \Application\Sonata\UserBundle\Entity\User|null
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
    /**
     * Set idEntity.
     *
     * @param \VB\OptionBundle\Entity\FormEntity $idCustomerentity
     *
     * @return Customer
     */
    public function setIdCustomerEntity(\VB\OptionBundle\Entity\FormEntity $idCustomerentity)
    {
        $this->idCustomerAdmin = $idCustomerentity;
        return $this;
    }
    /**
     * Get idCustomerEntity
     *
     * @return \VB\OptionBundle\Entity\FormEntity
     */
    public function getIdCustomerEntity()
    {
        return $this->idCustomerEntity;
    }
    /**
     * Add idContrat.
     *
     * @param \VB\CustomerBundle\Entity\Contrat $idContrat
     *
     * @return Customer
     */
    public function addIdContrat(\VB\CustomerBundle\Entity\Contrat $idContrat)
    {
        $this->idContrat[] = $idContrat;
        return $this;
    }
    /**
     * Remove idContrat.
     *
     * @param \VB\CustomerBundle\Entity\Contrat $idContrat
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdContrat(\VB\CustomerBundle\Entity\Contrat $idContrat)
    {
        return $this->idContrat->removeElement($idContrat);
    }
    /**
     * Get idContrat.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdContrat()
    {
        return $this->idContrat;
    }
    public function __toString() {
        return (string) $this->idCustomer;
    }

    public function upload()
    {
        // Si jamais il n'y a pas de fichier (champ facultatif), on ne fait rien
        if (null === $this->PieceIdenty) {
            return;
        }

        // On récupère le nom original du fichier de l'internaute
        $name = $this->PieceIdenty->getClientOriginalName();

        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->PieceIdenty->move($this->getUploadRootDir(), $name);

    }

    public function getUploadDir()
    {
        // On retourne le chemin relatif vers l'image pour un navigateur (relatif au répertoire /web donc)
        return 'uploads/doc';
    }

    protected function getUploadRootDir()
    {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

}