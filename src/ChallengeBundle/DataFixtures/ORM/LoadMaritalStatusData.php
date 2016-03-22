<?php

namespace ChallengeBundle\DataFixtures\ORM;

use ChallengeBundle\Entity\MaritalStatus;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * @author diego
 */
class LoadMaritalStatusData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $descriptions = ['Solteiro', 'Casado', 'Divorciado'];

        foreach ($descriptions as $description) {

            $maritalStatus = new MaritalStatus();
            $maritalStatus->setDescription($description);

            $manager->persist($maritalStatus);
        }

        $manager->flush();
    }
}
