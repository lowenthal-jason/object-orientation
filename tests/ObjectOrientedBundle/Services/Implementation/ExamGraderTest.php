<?php

/**
 * Created by PhpStorm.
 * User: jlowenthal
 * Date: 3/3/16
 * Time: 3:24 PM
 */
use Codeception\Specify;
use ObjectOrientedBundle\Domain\Exam;
use ObjectOrientedBundle\Services\Implementation\ExamGraderImplementation;

class ExamGraderTest extends \PHPUnit_Framework_TestCase
{
    use Specify;

    public function testGetGradeForExam(){
        $this->specify("Testing the method that gets the grade for an exam", function($examToGrade, $expectedOutput){
            $mockConversionService = $this->getMock('ObjectOrientedBundle\Services\GradeLetterConversionService',['convertDecimalValueToGradeLetter']);
            $mockConversionService->method('convertDecimalValueToGradeLetter')->willReturnMap([
                [.9,'A'],
                [.8,'B'],
                [.7,'C'],
                [.6,'D'],
                [.5,'F'],
                [.4,'F']
            ]);

            $examGrader = new ExamGraderImplementation();
            $examGrader->setGradeLetterConversionService($mockConversionService);
            $resultingGrade = $examGrader->getGradeForExam($examToGrade);
            verify($resultingGrade)->equals($expectedOutput);
        }, ['examples'=>[
            [new Exam(100, 90, 10, 10), 'A'],
            [new Exam(100, 80, 10, 10), 'B'],
            [new Exam(100, 70, 10, 10), 'C'],
            [new Exam(100, 60, 10, 10), 'D'],
            [new Exam(100, 50, 10, 10), 'F'],
            [new Exam(100, 40, 10, 10), 'F'],
        ]]);
    }
}
