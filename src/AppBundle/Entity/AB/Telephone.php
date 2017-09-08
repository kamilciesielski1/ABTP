<?php

namespace AppBundle\Entity\AB;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telephone
 *
 * @ORM\Table(name="telephone")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TelephoneRepository")
 */
class Telephone
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
     * @ORM\Column(name="mobileNo", type="string", length=100, nullable=true)
     */
    private $mobileNo;

    /**
     * @var string
     *
     * @ORM\Column(name="homeNo", type="string", length=100, nullable=true)
     */
    private $homeNo;

    /**
     * @var string
     *
     * @ORM\Column(name="workNo", type="string", length=100, nullable=true)
     */
    private $workNo;

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
     * Set mobileNo
     *
     * @param string $mobileNo
     *
     * @return Telephone
     */
    public function setMobileNo($mobileNo)
    {
        $this->mobileNo = $mobileNo;

        return $this;
    }

    /**
     * Get mobileNo
     *
     * @return string
     */
    public function getMobileNo()
    {
        return $this->mobileNo;
    }

    /**
     * Set homeNo
     *
     * @param string $homeNo
     *
     * @return Telephone
     */
    public function setHomeNo($homeNo)
    {
        $this->homeNo = $homeNo;

        return $this;
    }

    /**
     * Get homeNo
     *
     * @return string
     */
    public function getHomeNo()
    {
        return $this->homeNo;
    }

    /**
     * Set workNo
     *
     * @param string $workNo
     *
     * @return Telephone
     */
    public function setWorkNo($workNo)
    {
        $this->workNo = $workNo;

        return $this;
    }

    /**
     * Get workNo
     *
     * @return string
     */
    public function getWorkNo()
    {
        return $this->workNo;
    }
}

