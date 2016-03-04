<?php
namespace ObjectOrientedBundle\Domain;
/**
 * Created by PhpStorm.
 * User: jlowenthal
 * Date: 3/3/16
 * Time: 2:41 PM
 */
class Exam
{
    private $availablePoints;

    private $pointsEarned;

    private $numberOfQuestions;

    private $numberOfQuestionsAnswered;

    private $grade;

    /**
     * Exam constructor.
     * @param $availablePoints
     * @param $pointsEarned
     * @param $numberOfQuestions
     * @param $numberOfQuestionsAnswered
     * @param $grade
     */
    public function __construct($availablePoints, $pointsEarned, $numberOfQuestions, $numberOfQuestionsAnswered, $grade)
    {
        $this->availablePoints = $availablePoints;
        $this->pointsEarned = $pointsEarned;
        $this->numberOfQuestions = $numberOfQuestions;
        $this->numberOfQuestionsAnswered = $numberOfQuestionsAnswered;
        $this->grade = $grade;
    }

    /**
     * @return mixed
     */
    public function getAvailablePoints()
    {
        return $this->availablePoints;
    }

    /**
     * @param mixed $availablePoints
     */
    public function setAvailablePoints($availablePoints)
    {
        $this->availablePoints = $availablePoints;
    }

    /**
     * @return mixed
     */
    public function getPointsEarned()
    {
        return $this->pointsEarned;
    }

    /**
     * @param mixed $pointsEarned
     */
    public function setPointsEarned($pointsEarned)
    {
        $this->pointsEarned = $pointsEarned;
    }

    /**
     * @return mixed
     */
    public function getNumberOfQuestions()
    {
        return $this->numberOfQuestions;
    }

    /**
     * @param mixed $numberOfQuestions
     */
    public function setNumberOfQuestions($numberOfQuestions)
    {
        $this->numberOfQuestions = $numberOfQuestions;
    }

    /**
     * @return mixed
     */
    public function getNumberOfQuestionsAnswered()
    {
        return $this->numberOfQuestionsAnswered;
    }

    /**
     * @param mixed $numberOfQuestionsAnswered
     */
    public function setNumberOfQuestionsAnswered($numberOfQuestionsAnswered)
    {
        $this->numberOfQuestionsAnswered = $numberOfQuestionsAnswered;
    }

    /**
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param mixed $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }
}