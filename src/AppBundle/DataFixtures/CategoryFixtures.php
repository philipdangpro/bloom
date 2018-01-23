<?php

namespace  AppBundle\DataFixtures;

use AppBundle\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    CONST LOCALES = ['en' => 'en_US', 'fr' => 'fr_FR'];

    public function load(ObjectManager $objectManager)
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 5; $i++){
            $entity = new Category();
            foreach (self::LOCALES as $k => $v){
                $name = ($k == 'en') ? 'category_en' : 'catégorie_fr';
                $entity->translate($k)->setName($name . $i);
                $entity->translate($k)->setDescription(implode(" ", $faker->words()));
            }
            $entity->mergeNewTranslations();
            $this->addReference($i, $entity);
            $objectManager->persist($entity);
        }

        $objectManager->flush();
    }
}