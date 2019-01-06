<?php
/**
 * Converts decimal numbers to location numerals and vice versa
 * @author Tareq Anwar <trqnwr@gmail.com>
 */
class LocationNumerals
{
    private $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    
    /**
     * Calculates and returns abbreviated location numeral for an integer
     * @param int $number the integer for which we want location numeral
     * @return string $locationNumeral the abbreviated location numeral string
     * @access public 
     */
    public function getLocationNumeral($number) 
    {
        $locationNumeral = '';

        $reverseBinary = strrev(decbin($number));

        for ($i = 0; $i < strlen($reverseBinary); $i++){
            if($reverseBinary[$i] == 1)
                $locationNumeral .= $this->alphabet[$i];
        }

        return $locationNumeral;
    }

    /**
     * Calculates and returns integer value of location numeral
     * @param string $locationNumeral the location numeral
     * @return int $number the integer for location numeral
     * @access public 
     */
    public function getLocationNumeralInteger($locationNumeral) 
    {
        $number = 0;

        for ($i = 0; $i < strlen($locationNumeral); $i++){
            $key = array_search($locationNumeral[$i], $this->alphabet);

            $number += 2 ** $key;
        }

        return $number;
    }
}