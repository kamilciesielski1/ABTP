<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TestRepository")
 */
class Test
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    protected $description;

    /**
     * @ORM\ManyToMany(targetEntity="Tags", inversedBy="tasks", cascade="persist")
     * @ORM\JoinTable(name="tasks_tags")
     */
    protected $tags;

    /**
     * @ORM\OneToOne(targetEntity="Address", cascade="persist")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     */
    protected $address;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Test
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function addTag(Tags $tag)
    {
        $this->tags->add($tag);
    }

    public function removeTag(Tags $tag)
    {
        $this->tags->removeElement($tag);
    }
    /**
     * get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }
}

