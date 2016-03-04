<?php
/**
 * Created by PhpStorm.
 * User: jlowenthal
 * Date: 3/4/16
 * Time: 8:23 AM
 */
namespace ObjectOrientedBundle\Services;


/**
 * Created by PhpStorm.
 * User: jlowenthal
 * Date: 3/3/16
 * Time: 2:53 PM
 */
interface GradeLetterConversionService
{
    /**
     * @param $decimalValueToConvert float A decimal value (<= 1) representing the students fractional grade on an exam
     * @return string A single letter representation of the grade earned on this exam
     */
    public function convertDecimalValueToGradeLetter($decimalValueToConvert);
}