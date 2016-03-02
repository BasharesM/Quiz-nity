<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gameplay
 *
 * @ORM\Table(name="gameplay")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameplayRepository")
 */
class Gameplay
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
     * @var \DateTime
     *
     * @ORM\Column(name="beginAt", type="datetime")
     */
    private $beginAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endAt", type="datetime")
     */
    private $endAt;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer")
     */
    private $score;

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
     * Set beginAt
     *
     * @param \DateTime $beginAt
     * @return Gameplay
     */
    public function setBeginAt($beginAt)
    {
        $this->beginAt = $beginAt;
        return $this;
    }

    /**
     * Get beginAt
     *
     * @return \DateTime 
     */
    public function getBeginAt()
    {
        return $this->beginAt;
    }

    /**
     * Set endAt
     *
     * @param \DateTime $endAt
     * @return Gameplay
     */
    public function setEndAt($endAt)
    {
        $this->endAt = $endAt;
        return $this;
    }

    /**
     * Get endAt
     *
     * @return \DateTime 
     */
    public function getEndAt()
    {
        return $this->endAt;
    }

    /**
     * Set score
     *
     * @param integer $score
     * @return Gameplay
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }
}
