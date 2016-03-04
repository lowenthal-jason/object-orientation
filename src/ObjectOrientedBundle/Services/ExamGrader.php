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
    public function getGradeForExam(Exam $examToGetGradeFor)
    {
        $availablePoints = $examToGetGradeFor->getAvailablePoints();
        $pointsEarned = $examToGetGradeFor->getPointsEarned();
        $fractionalPoints = $pointsEarned / $availablePoints;

        $grade = null;
        if ($fractionalPoints >= .9) {
            $grade = 'A';
        } else if ($fractionalPoints >= .8) {
            $grade = 'B';
        } else if ($fractionalPoints >= .7) {
            $grade = 'C';
        } else if ($fractionalPoints >= .6) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        $examToGetGradeFor->setGrade($grade);
        return $grade;

    }

}