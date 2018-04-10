<?php
/**
 * Created by PhpStorm.
 * User: paulina
 * Date: 10.04.18
 * Time: 21:08
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Tag
 * @package App\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="Tag")
 */
class Tag
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     * @ORM\Column(name="createData", type="datetime", nullable=false)
     */
    private $createData;

    /**
     * @var \DateTime
     * @ORM\Column(name="editData", type="datetime", nullable=false)
     */
    private $editData;

    /**
     * One user has many tags
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id")
     */
    private $userId;

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param \DateTime $createData
     */
    public function setCreateData(\DateTime $createData)
    {
        $this->createData = $createData;
    }

    /**
     * @param \DateTime $editData
     */
    public function setEditData(\DateTime $editData)
    {
        $this->editData = $editData;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return \DateTime
     */
    public function getCreateData(): \DateTime
    {
        return $this->createData;
    }

    /**
     * @return \DateTime
     */
    public function getEditData(): \DateTime
    {
        return $this->editData;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }
    
}