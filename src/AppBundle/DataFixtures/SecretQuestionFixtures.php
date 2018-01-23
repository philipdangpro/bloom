<?php

namespace  AppBundle\DataFixtures;

use AppBundle\Entity\SecretQuestion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SecretQuestionFixtures extends Fixture
{
    CONST LOCALES = ['en' => 'en_US', 'fr' => 'fr_FR'];

    public function load(ObjectManager $objectManager)
    {
        for($i = 0; $i < 5; $i++){
            $entity = new SecretQuestion();
            foreach (self::LOCALES as $k => $v){
                $content = ($k == 'en') ? 'english' : 'français';
                $entity->setType("first");
                $entity->translate($k)->setContent($content . $i . "_ _" . $k);
            }
            $entity->mergeNewTranslations();
            $objectManager->persist($entity);
        }

        $objectManager->flush();
    }
}