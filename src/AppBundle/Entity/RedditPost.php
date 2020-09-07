<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\User;

/**
 * Class RedditPost
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="reddit_post")
 */
class RedditPost
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="posts")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userId;

	/**
	 * @ORM\Column(type="string", length=100)
	 */
	private $title;

	/**
	 * @ORM\Column(type="string", length=1000)
	 */
	private $text;

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
	private $postDate;

    /**
     * @ORM\OneToMany(targetEntity="RedditComment", mappedBy="postId")
     */
    private $comments;
   
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
        $this->postDate = new \DateTime();
    }

	/**
	 * @return mixed
	 */
	 public function getId()
    {
        return $this->id;
    }
    //ne treba mi set jer je auto increment (AI)

    /**
	 * @return mixed
	 */
    public function getTitle()
    {
        return $this->title;
    }

    /**
	 * @return mixed $title
	 * @return RedditPost
	 */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return RedditPost
     */
    public function setUserId(\AppBundle\Entity\User $userId = null)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
	 * @return mixed
	 */
	 public function getText()
    {
        return $this->text;
    }

    /**
	 * @return mixed $text
	 * @return RedditPost
	 */
    public function setText($text)
    {
        $this->text = $text;
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
	 * @return RedditPost
	 */
    public function setImage($image)
    {
        $this->image = $image;
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
	 * @return RedditPost
	 */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
     public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * @return mixed $postDate
     * @return RedditPost
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;
    }

    /**
      * Get comments
      *
      * @return \Doctrine\Common\Collections\Collection
      */
    public function getComments()
    {
        return $this->comments;
    }

    /**
      * @return mixed $comments
      * @return RedditPost
      */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }
}