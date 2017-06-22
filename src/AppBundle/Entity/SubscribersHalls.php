<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubscribersHalls
 *
 * @ORM\Table(name="subscribers_halls")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubscribersHallsRepository")
 */
class SubscribersHalls
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Hall")
     */
    private $halls;

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
     * Set subscribers
     *
     * @param \UserBundle\Entity\User $subscribers
     *
     * @return SubscribersHalls
     */
    public function setSubscribers(\UserBundle\Entity\User $subscribers = null)
    {
        $this->subscribers = $subscribers;

        return $this;
    }

    /**
     * Get subscribers
     *
     * @return \UserBundle\Entity\User
     */
    public function getSubscribers()
    {
        return $this->subscribers;
    }

    /**
     * Set halls
     *
     * @param \AppBundle\Entity\Hall $halls
     *
     * @return SubscribersHalls
     */
    public function setHalls(\AppBundle\Entity\Hall $halls = null)
    {
        $this->halls = $halls;

        return $this;
    }

    /**
     * Get halls
     *
     * @return \AppBundle\Entity\Hall
     */
    public function getHalls()
    {
        return $this->halls;
    }
}
