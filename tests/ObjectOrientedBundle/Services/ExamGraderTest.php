<?php

/**
 * Created by PhpStorm.
 * User: jlowenthal
 * Date: 3/3/16
 * Time: 3:24 PM
 */
use Codeception\Specify;
use ObjectOrientedBundle\Domain\Exam;
use ObjectOrientedBundle\Services\ExamGrader;

class ExamGraderTest extends \PHPUnit_Framework_TestCase
{
    use Specify;

    public function testGetGradeForExam(){
        $this->specify("Testing the method that gets the grade for an exam", function($examToGrade, $expectedOutput){
            $examGrader = new ExamGrader();
            $resultingGrade = $examGrader->getGradeForExam($examToGrade);
            verify($resultingGrade)->equals($expectedOutput);
        }, ['examples'=>[
            [new Exam(100, 90, 10, 10, null), 'A'],
            [new Exam(100, 80, 10, 10, null), 'B'],
            [new Exam(100, 70, 10, 10, null), 'C'],
            [new Exam(100, 60, 10, 10, null), 'D'],
            [new Exam(100, 50, 10, 10, null), 'F'],
            [new Exam(100, 40, 10, 10, null), 'F'],
        ]]);
    }
}
