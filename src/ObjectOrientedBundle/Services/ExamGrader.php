<?php
/**
 * Created by PhpStorm.
 * User: jlowenthal
 * Date: 3/4/16
 * Time: 8:07 AM
 */
namespace ObjectOrientedBundle\Services;
use ObjectOrientedBundle\Domain\Exam;


/**
 * Created by PhpStorm.
 * User: jlowenthal
 * Date: 3/3/16
 * Time: 2:43 PM
 */
interface ExamGrader
{
    public function getGradeForExam(Exam $examToGetGradeFor);

    public function getGradeLetterConversionService();

    public function setGradeLetterConversionService(GradeLetterConversionService $gradeLetterConversionServiceIn);
}