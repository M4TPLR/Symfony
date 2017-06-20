<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentRepository")
 */
class Comment
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
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Video")
     * @ORM\JoinColumn(nullable=false)
     */
    private $video;


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
     * Set text
     *
     * @param string $text
     *
     * @return Comment
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }


    /**
     * Set video
     *
     * @param \Entity $video
     *
     * @return Comment
     */
    public function setVideo(\Entity $video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return \Entity
     */
    public function getVideo()
    {
        return $this->video;
    }
}
