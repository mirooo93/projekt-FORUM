<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class RedditComment
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="reddit_comment")
 */
class RedditComment
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
     * @ORM\Column(type="string")
     */
	private $comment;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $image = 'No image';

	/**
     * @var \DateTime
     *
	 * @ORM\Column(type="datetime")
	 */
	private $commentDate;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="comments")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userId;

    /**
     * @ORM\ManyToOne(targetEntity="RedditPost", inversedBy="comments")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    private $postId;
   
	/**
	 * @return mixed
	 */
	public function __toString(){
        // to show the name of the Category in the select
        return $this->title;
        // to show the id of the Category in the select
        // return $this->id;
    }

    public function __construct()
    {
        $this->commentDate = new \DateTime();
    }

	/**
	 * @return mixed
	 */
	 public function getId()
    {
        return $this->id;
    }

    /**
	 * @return mixed
	 */
	 public function getComment()
    {
        return $this->comment;
    }

    /**
	 * @return mixed $comment
	 * @return RedditComment
	 */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
	 * @return mixed
	 */
     public function getImage()
    {
        return $this->image;
    }

    /**
	 * @return mixed $image
	 * @return RedditComment
	 */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
     public function getComDate()
    {
        return $this->commentDate;
    }

    /**
     * @return mixed $commentDate
     * @return RedditComment
     */
    public function setComDate($commentDate)
    {
        $this->commentDate = $commentDate;
    }

     /**
     * Get userId
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userId
     * 
     * @param \AppBundle\Entity\User $userId
     *
     * @return RedditComment
     */
    public function setUserId(\AppBundle\Entity\User $userId = null)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Get postId
     *
     * @return \AppBundle\Entity\RedditPost
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set postId
     * 
     * @param \AppBundle\Entity\RedditPost $postId
     *
     * @return RedditComment
     */
    public function setPostId(\AppBundle\Entity\RedditPost $postId = null)
    {
        $this->postId = $postId;
        return $this;
    }
}