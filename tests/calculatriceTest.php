<?php
require 'calculatrice.php';

use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{
    public function testAddition()
    {
        $this->assertEquals(addition(2, 3), 5);
        $this->assertEquals(addition(-2, 3), 1);
    }

    public function testSoustraction()
    {
        $this->assertEquals(soustraction(5, 2), 3);
        $this->assertEquals(soustraction(2, 5), -3);
    }

    public function testMultiplication()
    {
        $this->assertEquals(multiplication(2, 3), 6);
        $this->assertEquals(multiplication(-2, 3), -6);
    }

    public function testDivision()
    {
        $this->assertEquals(division(6, 3), 1);
        $this->assertEquals(division(6, -3), -2);
    }
}
