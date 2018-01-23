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

        for($i = 0; $i < 5; $i++){
            $entity = new EmailTemplate();
            $entity->setType("type" . $i);
            $entity->setContent("content". $i);
            $objectManager->persist($entity);
        }


        $objectManager->flush();
    }
}