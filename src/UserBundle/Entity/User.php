<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
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
     * @var string
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    protected $firstname;

    /**
     * @var string
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    protected $lastname;

    /**
     * @var string
     * @ORM\Column(name="country", type="string", length=255)
     */
    protected $country;

    /**
     * @var string
     * @ORM\Column(name="bio", type="text")
     */
    protected $bio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday_date", type="datetimetz")
     */
    protected $birthdayDate;

    public function __construct()
    {
        parent::__construct();
        $this->setFirstname('');
        $this->setBio('');
        $this->setLastname('');
        $this->setBirthdayDate(new \DateTime('now'));
        $this->setCountry('');
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set bio
     *
     * @param string $bio
     *
     * @return User
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set birthdayDate
     *
     * @param \DateTime $birthdayDate
     *
     * @return User
     */
    public function setBirthdayDate($birthdayDate)
    {
        $this->birthdayDate = $birthdayDate;

        return $this;
    }

    /**
     * Get birthdayDate
     *
     * @return \DateTime
     */
    public function getBirthdayDate()
    {
        return $this->birthdayDate;
    }
}
