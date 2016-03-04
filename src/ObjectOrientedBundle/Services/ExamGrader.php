<?php

namespace ObjectOrientedBundle\Services;

use ObjectOrientedBundle\Domain\Exam;

/**
 * Created by PhpStorm.
 * User: jlowenthal
 * Date: 3/3/16
 * Time: 2:43 PM
 */
class ExamGrader
{

    /**
     * @var GradeLetterConversionService
     */
    private $gradeLetterConversionService;

    public function getGradeForExam(Exam $examToGetGradeFor)
    {
        $availablePoints = $examToGetGradeFor->getAvailablePoints();
        $pointsEarned = $examToGetGradeFor->getPointsEarned();
        $fractionalPoints = $pointsEarned / $availablePoints;

        $grade = null;

        $grade = $this->getGradeLetterConversionService()->convertDecimalValueToGradeLetter($fractionalPoints);

        $examToGetGradeFor->setGrade($grade);
        return $grade;

    }

    public function getGradeLetterConversionService()
    {
        if ($this->gradeLetterConversionService == null) {
            $this->gradeLetterConversionService = new GradeLetterConversionService();
        }
        return $this->gradeLetterConversionService;
    }

    public function setGradeLetterConversionService(GradeLetterConversionService $gradeLetterConversionServiceIn)
    {
        $this->gradeLetterConversionService = $gradeLetterConversionServiceIn;
    }

}