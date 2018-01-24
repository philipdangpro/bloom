<?php

namespace  AppBundle\DataFixtures;

use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class UserFixtures extends Fixture
{
    CONST LOCALES = ['en' => 'en_US', 'fr' => 'fr_FR'];
    CONST TAGS = ['twitter', 'star wars', 'dune', 'facebook', 'instagram'];

    public function load(ObjectManager $objectManager)
    {
        $faker = \Faker\Factory::create('fr_FR');
        $date = new \DateTime();

        for($i = 0; $i < 50; $i++){
            $entity = new User();
            $entity
                ->setFirstname($faker->firstName())
                ->setLastname($faker->lastName())
                ->setBirthdate($faker->dateTimeBetween('-30 years', '-15 years'))
                ->setGender($faker->numberBetween(1,3))
                ->setIsActive(true)
                ->setIsAdmin(false)
                ->setCreatedAt($date)
                ->setLastModifiedAt($date)
                ->setLastConnectedAt(null)
                ->setBlockedBy('')
                ->setFriends('')
                ->setFollowings('')
            ;

            $objectManager->persist($entity);
        }

        $objectManager->flush();
    }








//    public function getDependencies()
//    {
//        return [
//            UserFixtures::class,
//        ];
//    }
}