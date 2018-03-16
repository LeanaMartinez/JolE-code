<?php

namespace App\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="_user")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    protected $username;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    protected $password;

    /**
     * @ORM\ManyToMany(targetEntity="Team")
     * @ORM\JoinTable(name="favTeam",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="team_id", referencedColumnName="id")}
     *      )
     */
    protected $favTeam;

    /**
     * @ORM\ManyToMany(targetEntity="Team")
     * @ORM\JoinTable(name="favGame",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="game_id", referencedColumnName="id")}
     *      )
     */
    protected $favGame;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function getPassword()
    {
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getSalt()
    {
    }
    public function eraseCredentials()
    {
    }

    /**
     * @return mixed
     */
    public function getFavTeam()
    {
        return $this->favTeam;
    }

    /**
     * @param mixed $favTeam
     */
    public function setFavTeam($favTeam)
    {
        $this->favTeam = $favTeam;
    }

    /**
     * @return mixed
     */
    public function getFavGame()
    {
        return $this->favGame;
    }

    /**
     * @param mixed $favGame
     */
    public function setFavGame($favGame)
    {
        $this->favGame = $favGame;
    }
}