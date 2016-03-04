<?php

namespace ObjectOrientedBundle\Services;

/**
 * Created by PhpStorm.
 * User: jlowenthal
 * Date: 3/3/16
 * Time: 2:53 PM
 */
class GradeLetterConversionService
{
    /**
     * @param $decimalValueToConvert float A decimal value (<= 1) representing the students fractional grade on an exam
     * @return string A single letter representation of the grade earned on this exam
     */
    public function convertDecimalValueToGradeLetter($decimalValueToConvert){
        $gradeLetter = null;

        if ($decimalValueToConvert >= .9) {
            $gradeLetter = 'A';
        } else if ($decimalValueToConvert >= .8) {
            $gradeLetter = 'B';
        } else if ($decimalValueToConvert >= .7) {
            $gradeLetter = 'C';
        } else if ($decimalValueToConvert >= .6) {
            $gradeLetter = 'D';
        } else {
            $gradeLetter = 'F';
        }
        return $gradeLetter;
    }
}