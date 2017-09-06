<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Tags
 *
 * @ORM\Table(name="tags")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TagsRepository")
 */
class Tags
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\ManyToMany(targetEntity="Test", mappedBy="tags")
     */
    protected $tasks;

    public function __construct()
    {
        $this->tasks = new ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Tags
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * get tasks
     *
     * @return string
     */
    public function getTasks()
    {
        return $this->tasks;
    }
}

