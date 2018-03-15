<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table(name="_match")
 * @ORM\Entity(repositoryClass="App\Repository\MatchRepository")
 */
class Match
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $teamA;
    /**
     * @ORM\Column(type="string")
     */
    protected $teamB;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;
    /**
     * @ORM\Column(type="string")
     */
    protected $score;
<<<<<<< Updated upstream
}
=======
    /**
     * Many match for a game
     * @ORM\ManyToOne(targetEntity="Game", inversedBy="matches")
     * @ORM\JoinColumn(nullable=false, name="game", referencedColumnName="id")
     */
    protected $game;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;
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
    public function getTeamA()
    {
        return $this->teamA;
    }
    /**
     * @param mixed $teamA
     */
    public function setTeamA($teamA)
    {
        $this->teamA = $teamA;
    }
    /**
     * @return mixed
     */
    public function getTeamB()
    {
        return $this->teamB;
    }
    /**
     * @param mixed $teamB
     */
    public function setTeamB($teamB)
    {
        $this->teamB = $teamB;
    }
    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }
    /**
     * @param mixed $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }
}
>>>>>>> Stashed changes
