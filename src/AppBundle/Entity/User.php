<?php
/**
 * Created by PhpStorm.
 * User: kamilciesielski1
 * Date: 07.09.17
 * Time: 14:03
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="`user`")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Test", mappedBy="user")
     */
    protected $tests;

    public function __construct()
    {
        parent::__construct();
        $this->tests = new ArrayCollection();
    }
}