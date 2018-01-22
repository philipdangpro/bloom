<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * SecretQuestion
 *
 * @ORM\Entity()
 */
class SecretQuestionTranslation
{
    use ORMBehaviors\Translatable\Translation;
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", nullable=false)
     */
    private $content;

    /**
     * Set content
     *
     * @param string $content
     *
     * @return SecretQuestion
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}

