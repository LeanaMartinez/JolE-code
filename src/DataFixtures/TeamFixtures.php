<?php

namespace App\DataFixtures;

use App\Entity\Team;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TeamFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $i = 1;

        while ($i <= 4){
            $team = new Team();
            $team->setName("Team n" . $i);
            $team->setGame($this->getReference('game_1'));
            $team->setDivision("Division n" . $i);
            $team->setCountry("Country n" . $i);

            $manager->persist($team);
            $i++;
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}