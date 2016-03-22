<?php

namespace ChallengeBundle\DataFixtures\ORM;

use ChallengeBundle\Entity\Category;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * @author diego
 */
class LoadCategoryData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $descriptions = ["Empregado", "Empregador", "Autônomo", "Outros"];

        foreach ($descriptions as $description) {

            $category = new Category();
            $category->setDescription($description);

            $manager->persist($category);
        }

        $manager->flush();
    }
}
