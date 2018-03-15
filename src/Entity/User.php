<?php

namespace App\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
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
    protected $apiKey;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    protected $password;

    /**
     * @ORM\ManyToMany(targetEntity="Team")
     * @ORM\JoinTable(name="fav_team",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="team_id", referencedColumnName="id")}
     *      )
     */
    protected $fav_team;

    /**
     * @ORM\ManyToMany(targetEntity="Team")
     * @ORM\JoinTable(name="fav_game",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="game_id", referencedColumnName="id")}
     *      )
     */
    protected $fav_game;

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

    /**
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param mixed $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function getPassword()
    {
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
        return $this->fav_team;
    }

    /**
     * @param mixed $fav_team
     */
    public function setFavTeam($fav_team)
    {
        $this->fav_team = $fav_team;
    }

    /**
     * @return mixed
     */
    public function getFavGame()
    {
        return $this->fav_game;
    }

    /**
     * @param mixed $fav_game
     */
    public function setFavGame($fav_game)
    {
        $this->fav_game = $fav_game;
    }

}