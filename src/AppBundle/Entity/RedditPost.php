<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

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
	protected $id;

	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $title;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $email = 'defoult@gmail.com';
	

	/**
	 * @ORM\Column(type="string", length=1000)
	 */
	protected $text;


	/**
	 * @ORM\Column(type="string")
	 */
	protected $picture = 'slika';


	/**
	 * @ORM\Column(type="string")
	 */
	protected $authorName = 'robot';


	/**
	 * @ORM\Column(type="string")
	 */
	protected $comment = 'no comm';

	/**
	 * @return mixed
	 */
	public function __toString(){
        // to show the name of the Category in the select
        return $this->title;
        // to show the id of the Category in the select
        // return $this->id;
    }
	//get set
	//1
	/**
	 * @return mixed
	 */
	 public function getId()
    {
        return $this->id;
    }
    //ne treba mi set jer je auto increment (AI)

    //2
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

    //3
    /**
	 * @return mixed
	 */
     public function getEmail()
    {
        return $this->email;
    }

    /**
	 * @return mixed $email
	 * @return RedditPost
	 */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    //4
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

    //5
    /**
	 * @return mixed
	 */
     public function getPicture()
    {
        return $this->picture;
    }

    /**
	 * @return mixed $picture
	 * @return RedditPost
	 */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    //6
    /**
	 * @return mixed
	 */
     public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
	 * @return mixed $authorName
	 * @return RedditPost
	 */

    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
    }

    //7
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
}