<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table(name="answer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnswerRepository")
 */
class Answer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_good", type="boolean")
     */
    private $isGood;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set isGood
     *
     * @param boolean $isGood
     * @return Answer
     */
    public function setIsGood($isGood)
    {
        $this->isGood = $isGood;

        return $this;
    }

    /**
     * Get isGood
     *
     * @return boolean 
     */
    public function getIsGood()
    {
        return $this->isGood;
    }
}
