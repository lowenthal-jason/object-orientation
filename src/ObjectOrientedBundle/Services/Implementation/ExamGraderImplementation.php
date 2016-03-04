<?php

namespace ObjectOrientedBundle\Services\Implementation;

use ObjectOrientedBundle\Domain\Exam;
use ObjectOrientedBundle\Services\ExamGrader;
use ObjectOrientedBundle\Services\GradeLetterConversionService;

/**
 * Created by PhpStorm.
 * User: jlowenthal
 * Date: 3/3/16
 * Time: 2:43 PM
 */
class ExamGraderImplementation implements ExamGrader
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

        return $grade;

    }

    public function getGradeLetterConversionService()
    {
        if ($this->gradeLetterConversionService == null) {
            $this->gradeLetterConversionService = new GradeLetterConversionServiceImplementation();
        }
        return $this->gradeLetterConversionService;
    }

    public function setGradeLetterConversionService(GradeLetterConversionService $gradeLetterConversionServiceIn)
    {
        $this->gradeLetterConversionService = $gradeLetterConversionServiceIn;
    }

}