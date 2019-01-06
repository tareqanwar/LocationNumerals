<?php
/**
 * Tests for perform unit testing on LocationNumerals class
 * @author Tareq Anwar <trqnwr@gmail.com>
 */

use PHPUnit\Framework\TestCase;

class LocationNumeralsTest extends TestCase
{
    public function testIntegerToLocationNumeral()
    {
        $locationNumerals = new LocationNumerals;

        $locationNumeral = $locationNumerals->getLocationNumeral(9);

        $this->assertEquals($locationNumeral, 'ad');

        $locationNumeral = $locationNumerals->getLocationNumeral(87);

        $this->assertEquals($locationNumeral, 'abceg');

        $locationNumeral = $locationNumerals->getLocationNumeral(3147);

        $this->assertEquals($locationNumeral, 'abdgkl');
    }

    public function testLocationNumeralToInteger()
    {
        $locationNumerals = new LocationNumerals;

        $number = $locationNumerals->getLocationNumeralInteger('ad');

        $this->assertEquals($number, 9);
    }
}