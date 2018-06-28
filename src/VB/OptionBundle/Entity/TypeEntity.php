<?php
namespace VB\OptionBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * TypeEntity
 *
 * @ORM\Table(name="type_entity")
 * @ORM\Entity(repositoryClass="VB\OptionBundle\Repository\TypeEntityRepository")
 */
class TypeEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="type_entity", type="string", length=25)
     */
    private $typeEntity;
    /**
     * @var int
     *
     * @ORM\Column(name="id_entity", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntity;
    /**
     * Set typeEntity.
     *
     * @param string $typeEntity
     *
     * @return TypeEntity
     */
    public function setTypeEntity($typeEntity)
    {
        $this->typeEntity = $typeEntity;
        return $this;
    }


    /**
     * Get typeEntity.
     *
     * @return string
     */
    public function getTypeEntity()
    {
        return $this->typeEntity;
    }

    /**
     * Set idEntity.
     *
     * @param int $idEntity
     *
     * @return TypeEntity
     */
    public function setIdEntity($idEntity)
    {
        $this->idEntity = $idEntity;

        return $this;
    }


    /**
     * Get idEntity.
     *
     * @return int
     */
    public function getIdEntity()
    {
        return $this->idEntity;
    }
    public function __toString() {
        return (string) $this->idEntity;
    }
}