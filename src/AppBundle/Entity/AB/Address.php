<?php

namespace AppBundle\Entity\AB;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AddressRepository")
 */
class Address
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
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=100, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="houseNo", type="string", length=50, nullable=true)
     */
    private $houseNo;

    /**
     * @var string
     *
     * @ORM\Column(name="apartmentNo", type="string", length=50, nullable=true)
     */
    private $apartmentNo;

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
     * Set city
     *
     * @param string $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set houseNo
     *
     * @param string $houseNo
     *
     * @return Address
     */
    public function setHouseNo($houseNo)
    {
        $this->houseNo = $houseNo;

        return $this;
    }

    /**
     * Get houseNo
     *
     * @return string
     */
    public function getHouseNo()
    {
        return $this->houseNo;
    }

    /**
     * Set apartmentNo
     *
     * @param string $apartmentNo
     *
     * @return Address
     */
    public function setApartmentNo($apartmentNo)
    {
        $this->apartmentNo = $apartmentNo;

        return $this;
    }

    /**
     * Get apartmentNo
     *
     * @return string
     */
    public function getApartmentNo()
    {
        return $this->apartmentNo;
    }
}

