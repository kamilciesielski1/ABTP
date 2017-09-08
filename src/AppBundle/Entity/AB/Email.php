<?php

namespace AppBundle\Entity\AB;

use Doctrine\ORM\Mapping as ORM;

/**
 * Email
 *
 * @ORM\Table(name="email")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmailRepository")
 */
class Email
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
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email2", type="string", length=255, nullable=true)
     */
    private $email2;

    /**
     * @var string
     *
     * @ORM\Column(name="workEmail", type="string", length=255, nullable=true)
     */
    private $workEmail;


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
     * Set email
     *
     * @param string $email
     *
     * @return Email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email2
     *
     * @param string $email2
     *
     * @return Email
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;

        return $this;
    }

    /**
     * Get email2
     *
     * @return string
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Set workEmail
     *
     * @param string $workEmail
     *
     * @return Email
     */
    public function setWorkEmail($workEmail)
    {
        $this->workEmail = $workEmail;

        return $this;
    }

    /**
     * Get workEmail
     *
     * @return string
     */
    public function getWorkEmail()
    {
        return $this->workEmail;
    }
}

