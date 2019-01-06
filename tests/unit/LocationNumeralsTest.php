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
    }
}