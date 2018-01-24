<?php

namespace  AppBundle\DataFixtures;

use AppBundle\Entity\EmailTemplate;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EmailTemplateFixtures extends Fixture
{
    CONST LOCALES = ['en' => 'en_US', 'fr' => 'fr_FR'];

    public function load(ObjectManager $objectManager)
    {
        $faker = \Faker\Factory::create(self::LOCALES['fr']);

        for($i = 0; $i < 5; $i++){
            $entity = new EmailTemplate();
            $entity->setType("type" . $i);
            $entity->setContent($faker->realText($maxNbChars = $faker->numberBetween(50, 200), $indexSize = 2));
            $objectManager->persist($entity);
        }
//        $faker = null; unset($faker);


        $objectManager->flush();
    }
}