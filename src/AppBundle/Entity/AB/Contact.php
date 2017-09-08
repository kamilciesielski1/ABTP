<?php

namespace AppBundle\Entity\AB;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\AB\ABTags;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactRepository")
 */
class Contact
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=100)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity="Address", cascade="persist")
     */
    private $address;

    /**
     * @ORM\OneToOne(targetEntity="Email", cascade="persist")
     */
    private $email;

    /**
     * @ORM\OneToOne(targetEntity="Telephone", cascade="persist")
     */
    private $telephone;

    /**
     * @ORM\ManyToMany(targetEntity="ABTags", inversedBy="contacts", cascade="persist")
     * @ORM\JoinTable(name="contacts_tags")
     */
    public $abtags;

    public function __construct()
    {
        $this->abtags = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Contact
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
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Contact
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Contact
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

    /**
     * Get address
     *
     * @return object
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address
     *
     * @param $address
     *
     * @return Contact
     */
    public function setAddress(Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get email
     *
     * @return object
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param $email
     *
     * @return Contact
     */
    public function setEmail(Email $email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return object
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set telephone
     *
     * @param $telephone
     *
     * @return Contact
     */
    public function setTelephone(Telephone $telephone = null)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @param ABTags $tag
     */
    public function addTag(ABTags $tag)
    {
        $this->abtags->add($tag);
    }

    /**
     * @param ABTags $tag
     */
    public function removeTag(ABTags $tag)
    {
        $this->abtags->removeElement($tag);
    }

    /**
     * get abtags
     *
     * @return string
     */
    public function getABTags()
    {
        return $this->abtags;
    }
}

