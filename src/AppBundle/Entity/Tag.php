<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TagRepository")
 */
class Tag
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Video")
     * @ORM\JoinColumn(nullable=false)
     */
    private $video;

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
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrUses", type="integer")
     */
    private $nbrUses;


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
     * @return Tag
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
     * Set nbrUses
     *
     * @param integer $nbrUses
     *
     * @return Tag
     */
    public function setNbrUses($nbrUses)
    {
        $this->nbrUses = $nbrUses;

        return $this;
    }

    /**
     * Get nbrUses
     *
     * @return int
     */
    public function getNbrUses()
    {
        return $this->nbrUses;
    }

    /**
     * Set video
     *
     * @param \AppBundle\Entity\Video $video
     *
     * @return Tag
     */
    public function setVideo(\AppBundle\Entity\Video $video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return \AppBundle\Entity\Video
     */
    public function getVideo()
    {
        return $this->video;
    }

}
