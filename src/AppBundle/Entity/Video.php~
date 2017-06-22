<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VideoRepository")
 */
class Video
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Hall", inversedBy="videos")
     */
    private $hall;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="hallid", type="integer")
     */
    private $hallid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="postdate", type="datetimetz")
     */
    private $postdate;

    /**
     * @var int
     *
     * @ORM\Column(name="vote", type="integer")
     */
    private $vote;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="poster_img", type="string", length=255)
     */
    private $posterImg;

    /**
     * @var string
     *
     * @ORM\Column(name="video_url", type="string", length=255)
     */
    private $videoUrl;


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
     * Set title
     *
     * @param string $title
     *
     * @return Video
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Video
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set postdate
     *
     * @param \DateTime $postdate
     *
     * @return Video
     */
    public function setPostdate($postdate)
    {
        $this->postdate = $postdate;

        return $this;
    }

    /**
     * Get postdate
     *
     * @return \DateTime
     */
    public function getPostdate()
    {
        return $this->postdate;
    }

    /**
     * Set vote
     *
     * @param integer $vote
     *
     * @return Video
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return int
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Video
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
     * Set posterImg
     *
     * @param string $posterImg
     *
     * @return Video
     */
    public function setPosterImg($posterImg)
    {
        $this->posterImg = $posterImg;

        return $this;
    }

    /**
     * Get posterImg
     *
     * @return string
     */
    public function getPosterImg()
    {
        return $this->posterImg;
    }

    /**
     * Set videoUrl
     *
     * @param string $videoUrl
     *
     * @return Video
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;

        return $this;
    }

    /**
     * Get videoUrl
     *
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * Set hallid
     *
     * @param integer $hallid
     *
     * @return Video
     */
    public function setHallid($hallid)
    {
        $this->hallid = $hallid;

        return $this;
    }

    /**
     * Get hallid
     *
     * @return integer
     */
    public function getHallid()
    {
        return $this->hallid;
    }

    /**
     * Set hall
     *
     * @param \AppBundle\Entity\Hall $hall
     *
     * @return Video
     */
    public function setHall(\AppBundle\Entity\Hall $hall = null)
    {
        $this->hall = $hall;

        return $this;
    }

    /**
     * Get hall
     *
     * @return \AppBundle\Entity\Hall
     */
    public function getHall()
    {
        return $this->hall;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->followedHalls = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add followedHall
     *
     * @param \AppBundle\Entity\Hall $followedHall
     *
     * @return Video
     */
    public function addFollowedHall(\AppBundle\Entity\Hall $followedHall)
    {
        $this->followedHalls[] = $followedHall;

        return $this;
    }

    /**
     * Remove followedHall
     *
     * @param \AppBundle\Entity\Hall $followedHall
     */
    public function removeFollowedHall(\AppBundle\Entity\Hall $followedHall)
    {
        $this->followedHalls->removeElement($followedHall);
    }

    /**
     * Get followedHalls
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFollowedHalls()
    {
        return $this->followedHalls;
    }
}
