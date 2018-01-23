<?php

namespace  AppBundle\DataFixtures;

use AppBundle\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProductFixtures extends Fixture
{
    CONST LOCALES = ['en' => 'en_US', 'fr' => 'fr_FR'];
    CONST TAGS = ['twitter', 'star wars', 'dune', 'facebook', 'instagram'];

    public function load(ObjectManager $objectManager)
    {
        $faker = \Faker\Factory::create();

//        dump();

        for($i = 0; $i < 5; $i++){
            $entity = new Product();

            $entity->setSku($faker->unique()->numberBetween(0,5000));
            $entity->setPrice($faker->numberBetween(10,1000));
            $entity->setTags(implode(";", $faker->randomElements(self::TAGS, $faker->numberBetween(0,5), false)));
            $entity->setNbBuys(0);
            $entity->setAvailableQty($faker->numberBetween(0,10000));
            $entity->setCategory(
                $this->getReference($faker->numberBetween(1,4))
            );

            foreach (self::LOCALES as $k => $v){
                $name = ($k == 'en') ? 'product_en' : 'produit_fr';
                $entity->translate($k)->setName($name . $i);
                $entity->translate($k)->setDescription(implode("", $faker->words(2)));
            }
            $entity->mergeNewTranslations();
//            $this->addReference("cat" . $i, $entity);
            $objectManager->persist($entity);
        }

        $objectManager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}