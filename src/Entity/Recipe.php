<?php
/**
 * Created by PhpStorm.
 * User: paulina
 * Date: 09.04.18
 * Time: 20:07
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Recipe
 * @package App\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="Recipe")
 */
class Recipe
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
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", nullable=false)
     */
    private $content;

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
     * One user has many recipes
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id")
     */
    private $userId;

    /**
     * @ORM\Column(type="string", name="image")
     */
    private $image;

    /**
     * Many recipes have many tags
     * @ORM\ManyToMany(targetEntity="Tag")
     * @ORM\JoinColumn(name="tagId", referencedColumnName="id")
     */
    private $tagId;

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content)
    {
        $this->content = $content;
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
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @param mixed $tagId
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;
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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
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

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getTagId()
    {
        return $this->tagId;
    }

}