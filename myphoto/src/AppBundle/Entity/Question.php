<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuestionRepository")
 */
class Question
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
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="answer1", type="string", length=70)
     */
    private $answer1;

    /**
     * @var string
     *
     * @ORM\Column(name="answer2", type="string", length=70)
     */
    private $answer2;

    /**
     * @var string
     *
     * @ORM\Column(name="answer3", type="string", length=70)
     */
    private $answer3;

    /**
     * @var string
     *
     * @ORM\Column(name="answer4", type="string", length=70)
     */
    private $answer4;

    /**
     * @var string
     *
     * @ORM\Column(name="good_answer", type="string", length=70)
     */
    private $goodAnswer;

    /**
     * @var int
     *
     * @ORM\Column(name="quizz_id", type="integer")
     */
    private $quizzId;

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
     * Set question
     *
     * @param string $question
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set answer1
     *
     * @param string $answer1
     * @return Question
     */
    public function setAnswer1($answer1)
    {
        $this->answer1 = $answer1;
        return $this;
    }

    /**
     * Get answer1
     *
     * @return string 
     */
    public function getAnswer1()
    {
        return $this->answer1;
    }

    /**
     * Set answer2
     *
     * @param string $answer2
     * @return Question
     */
    public function setAnswer2($answer2)
    {
        $this->answer2 = $answer2;
        return $this;
    }

    /**
     * Get answer2
     *
     * @return string 
     */
    public function getAnswer2()
    {
        return $this->answer2;
    }

    /**
     * Set answer3
     *
     * @param string $answer3
     * @return Question
     */
    public function setAnswer3($answer3)
    {
        $this->answer3 = $answer3;
        return $this;
    }

    /**
     * Get answer3
     *
     * @return string 
     */
    public function getAnswer3()
    {
        return $this->answer3;
    }

    /**
     * Set answer4
     *
     * @param string $answer4
     * @return Question
     */
    public function setAnswer4($answer4)
    {
        $this->answer4 = $answer4;
        return $this;
    }

    /**
     * Get answer4
     *
     * @return string 
     */
    public function getAnswer4()
    {
        return $this->answer4;
    }

    /**
     * Set goodAnswer
     *
     * @param string $goodAnswer
     * @return Question
     */
    public function setGoodAnswer($goodAnswer)
    {
        $this->goodAnswer = $goodAnswer;
        return $this;
    }

    /**
     * Get goodAnswer
     *
     * @return string 
     */
    public function getGoodAnswer()
    {
        return $this->goodAnswer;
    }

    /**
     * Set quizzId
     *
     * @param integer $quizzId
     * @return Question
     */
    public function setQuizzId($quizzId)
    {
        $this->quizzId = $quizzId;
        return $this;
    }

    /**
     * Get quizzId
     *
     * @return integer 
     */
    public function getQuizzId()
    {
        return $this->quizzId;
    }
}
