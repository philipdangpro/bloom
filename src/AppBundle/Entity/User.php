<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="firstname", type="string")
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string")
     */
    private $lastname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date")
     */
    private $birthdate;

    /**
     * @var int
     *
     * @ORM\Column(name="gender", type="smallint")
     */
    private $gender;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $is_active;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_admin", type="boolean")
     */
    private $is_admin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="time")
     */
    private $created_at;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_modified_at", type="time")
     */
    private $last_modified_at;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_connected_at", type="time")
     */
    private $last_connected_at;

    /**
     * @var string
     *
     * @ORM\Column(name="blocked_by", type="string")
     */
    private $blocked_by;

    /**
     * @var string
     *
     * @ORM\Column(name="friends", type="string")
     */
    private $friends;

    /**
     * @var string
     *
     * @ORM\Column(name="followings", type="string")
     */
    private $followings;


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
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return User
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set isAdmin
     *
     * @param boolean $isAdmin
     *
     * @return User
     */
    public function setIsAdmin($isAdmin)
    {
        $this->is_admin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return bool
     */
    public function getIsAdmin()
    {
        return $this->is_admin;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set lastModifiedAt
     *
     * @param \DateTime $lastModifiedAt
     *
     * @return User
     */
    public function setLastModifiedAt($lastModifiedAt)
    {
        $this->last_modified_at = $lastModifiedAt;

        return $this;
    }

    /**
     * Get lastModifiedAt
     *
     * @return \DateTime
     */
    public function getLastModifiedAt()
    {
        return $this->last_modified_at;
    }

    /**
     * Set lastConnectedAt
     *
     * @param \DateTime $lastConnectedAt
     *
     * @return User
     */
    public function setLastConnectedAt($lastConnectedAt)
    {
        $this->last_connected_at = $lastConnectedAt;

        return $this;
    }

    /**
     * Get lastConnectedAt
     *
     * @return \DateTime
     */
    public function getLastConnectedAt()
    {
        return $this->last_connected_at;
    }

    /**
     * Set blockedBy
     *
     * @param string $blockedBy
     *
     * @return User
     */
    public function setBlockedBy($blockedBy)
    {
        $this->blocked_by = $blockedBy;

        return $this;
    }

    /**
     * Get blockedBy
     *
     * @return string
     */
    public function getBlockedBy()
    {
        return $this->blocked_by;
    }

    /**
     * Set friends
     *
     * @param string $friends
     *
     * @return User
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;

        return $this;
    }

    /**
     * Get friends
     *
     * @return string
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * Set followings
     *
     * @param string $followings
     *
     * @return User
     */
    public function setFollowings($followings)
    {
        $this->followings = $followings;

        return $this;
    }

    /**
     * Get followings
     *
     * @return string
     */
    public function getFollowings()
    {
        return $this->followings;
    }
}
