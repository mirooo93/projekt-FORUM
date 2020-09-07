<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony \Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\RedditPost;

/**
 * Class User
 * @package AppBundle\Entity
 *
 * @UniqueEntity(fields={"email", "username"}, message="It looks like your already have same email, pls try again!")
 * @ORM\Entity
 * @ORM\Table(name="reddit_user")
 */
class User implements UserInterface
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string")
     *Assert\Email()
	 */
	private $email = 'defoult@gmail.com';

	/**
	 * @ORM\Column(type="string")
	 */
	private $username = 'anonymouse';

    /**
     * @ORM\Column(type="string")
     */
    private $password;
	
    /**
     * @ORM\Column(type="array")
     */
    private $roles = [];

    /**
     * @ORM\OneToMany(targetEntity="RedditPost", mappedBy="userId")
     */
    private $posts;

    /**
     * @ORM\OneToMany(targetEntity="RedditComment", mappedBy="userId")
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
        $this->posts = new ArrayCollection();
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
	 * @return mixed $email
	 * @return User
	 */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
	 * @return mixed
	 */
    public function getUsername()
    {
        return $this->username;
    }

    /**
	 * @return mixed $username
	 * @return User
	 */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return mixed $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;
    } 

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
      * Get posts
      *
      * @return \Doctrine\Common\Collections\Collection
      */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
      * @return mixed $posts
      * @return User
      */
    public function setPosts($posts)
    {
        $this->posts = $posts;
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
      * @return User
      */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }
}