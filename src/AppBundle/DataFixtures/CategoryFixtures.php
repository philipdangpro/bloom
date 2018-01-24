<?php

namespace  AppBundle\DataFixtures;

use AppBundle\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    CONST LOCALES = ['en' => 'en_US', 'fr' => 'fr_FR'];
    CONST CATEGORIES = ['Bons plans', 'Anecdotes', 'Photos', 'Récits', 'Balades'];

    public function load(ObjectManager $objectManager)
    {

        for($i = 0; $i < 5; $i++){
            $entity = new Category();
            foreach (self::LOCALES as $k => $v){
                $faker = \Faker\Factory::create($v);
                $name = ($k == 'en') ? 'category_en' : 'catégorie_fr';
                $entity->translate($k)->setName(self::CATEGORIES[$faker->numberBetween(0,4)]);
                $entity->translate($k)->setDescription($faker->realText(30));
//                $faker = null; unset($faker);
            }
            $entity->mergeNewTranslations();
            $this->addReference($i, $entity);
            $objectManager->persist($entity);
        }

        $objectManager->flush();
    }
}