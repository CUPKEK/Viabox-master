<?php
namespace VB\OptionBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * FormEntity
 *
 * @ORM\Table(name="form_entity")
 * @ORM\Entity(repositoryClass="VB\OptionBundle\Repository\FormEntityRepository")
 */
class FormEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="type_Form", type="string", length=15)
     */
    private $typeForm;
    /**
     * @var \VB\OptionBundle\Entity\TypeEntity
     *
     * @ORM\ManyToOne(targetEntity="VB\OptionBundle\Entity\TypeEntity", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_entity", referencedColumnName="id_entity")
     * })
     */
    private $idTypeEntity;
    /**
     * @var int
     *
     * @ORM\Column(name="id_form", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idForm;
    /**
     * Set typeForm.
     *
     * @param string $typeForm
     *
     * @return FormEntity
     */
    public function setTypeForm($typeForm)
    {
        $this->typeForm = $typeForm;
        return $this;
    }
    /**
     * Get typeForm.
     *
     * @return string
     */
    public function getTypeForm()
    {
        return $this->typeForm;
    }
    /**
     * Set idForm.
     *
     * @param int $idForm
     *
     * @return FormEntity
     */
    public function setIdForm($idForm)
    {
        $this->idForm = $idForm;
        return $this;
    }
    /**
     * Get idForm.
     *
     * @return int
     */
    public function getIdForm()
    {
        return $this->idForm;
    }
    /**
     * Set idEntity.
     *
     * @param \VB\OptionBundle\Entity\TypeEntity $idTypeEntity
     *
     * @return FormEntity
     */
    public function setIdTypeEntity(\VB\OptionBundle\Entity\TypeEntity $idTypeEntity)
    {
        $this->idTypeEntity = $idTypeEntity;
        return $this;
    }
    /**
     * Get idTypeEntity.
     *
     * @return \VB\OptionBundle\Entity\TypeEntity
     */
    public function getIdTypeEntity()
    {
        return $this->idTypeEntity;
    }
    public function __toString() {
        return (string) $this->idForm;
    }
}