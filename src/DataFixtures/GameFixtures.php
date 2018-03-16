<?php

namespace App\DataFixtures;

use App\Entity\Game;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class GameFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $i = 1;

        while ($i <= 4){
            $game = new Game();
            $game->setName("Jeu n" . $i);
            $game->setSynopsis("Synopsis n" . $i);
            $game->setRules("Rules n" . $i);
            $game->setReleaseDate(new \DateTime());
            $game->setSlug("jeu-n" . $i);

            $this->addReference('game_' . $i, $game);
            $manager->persist($game);
            $i++;
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}