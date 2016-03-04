<?php

use Codeception\Specify;
use ObjectOrientedBundle\Domain\Exam;
use ObjectOrientedBundle\Services\GradeLetterConversionService;

/**
 * Created by PhpStorm.
 * User: jlowenthal
 * Date: 3/3/16
 * Time: 9:52 PM
 */
class GradeLetterConversionServiceTest extends PHPUnit_Framework_TestCase
{

    use Specify;

    public function testGetGradeForExam(){
        $this->specify("Testing the method that gets the grade for an exam", function($inputDecimalValue, $expectedOutput){
            $gradeLetterConversionService = new GradeLetterConversionService();
            $resultingGrade = $gradeLetterConversionService->convertDecimalValueToGradeLetter($inputDecimalValue);
            verify($resultingGrade)->equals($expectedOutput);
        }, ['examples'=>[
            [.9, 'A'],
            [.8, 'B'],
            [.7, 'C'],
            [.6, 'D'],
            [.5, 'F'],
            [.4, 'F'],
        ]]);
    }

}
